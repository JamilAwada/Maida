<?php
    require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maida - Sign Up</title>
</head>
<body>
        <!-- CDN for SweetAlert: Shows an alert when the user registers successfully -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- CDN for JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>

<?php
    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $error = false;


        if(empty($username) | empty($email) | empty($password)){
            $error = true;
            header("Location: signup.php?error=empty");
            exit();
        }

        // Check if the email is valid
        // Email must start with a letter, contain only letters, numbers, and underscores, and end with a letter or number
        // Email must contain an @ symbol and a .
        if(!preg_match("/^[a-zA-Z][a-zA-Z0-9_]*[a-zA-Z0-9]@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/", $email)){
            $error = true;
            header("Location: signup.php?error=invalidemail&username=$username");
            exit();
        }


        // check for password length (min 6 characters)
        if(strlen($password) < 6){
            $error = true;
            header("Location: signup.php?error=shortpassword&username=$username");
            exit();
        }

        // check if username is already taken with pdo
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $db->prepare($sql);
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user){
            $error = true;
            header("Location: signup.php?error=usernametaken&email=$email");
            exit();
        }

        // check if email is already taken with pdo
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $db->prepare($sql);
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user){
            $error = true;
            header("Location: signup.php?error=emailtaken&username=$username");
            exit();
        }

        if(!$error){
            $password = sha1($password);
            // insert into database
            $sql = "INSERT INTO users (username, password, email, address, district, city, phone) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $db->prepare($sql);
            $result = $stmt -> execute([$username, $password, $email, "", "", "", ""]);
            if($result){
                print("<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'You have successfully registered!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(function() {
                    window.location = 'preauth.php';
                });
                </script>");
            }else{
                print("<p>Error in registering, sorry!</p>");
            }
        }
    }
?>
</body>
</html>