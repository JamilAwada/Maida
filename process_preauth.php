<?php
    require_once("config.php");
?>

<?php

    // authenticate user with pdo
    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $password = sha1($_POST['password']);

        $error = false;

        if(empty($email) | empty($password)){
            $error = true;
            header("Location: preauth.php?error=empty");
            exit();
        }
        print("email: $email");
        if(!$error){
            $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
            $stmt = $db->prepare($sql);
            $stmt->execute(['email' => $email, 'password' => $password]);
            $user = $stmt->fetch();
            if ($user) {
                session_start();

                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['password'] = $user['password'];

                header("Location: home.html");
                exit();
            }else{
                header("Location: preauth.php?error=invalid");
                exit();
            }
        }
    }
?>