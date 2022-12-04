<?php
    require_once("config.php");
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
?>

<?php
    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $description = $_POST['desc'];
        $cuisine = $_POST['cuisine'];
        $diet = $_POST['diet'];
        $price = $_POST['price'];
        $carbs = $_POST['carbs'];
        $protein = $_POST['protein'];
        $fat = $_POST['fat'];

        $chefid = $_SESSION['username'];
        
        // get uploaded image file
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        $folder = "ImageUploads/".$image;
        
        if(move_uploaded_file($image_tmp, $folder)){
            echo "Uploaded";
        }else{
            echo $_FILES["image"]["error"];
        }


        //make fields capitalized
        $name = ucwords($name);
        $description = ucwords($description);


        $error = false;
        if(empty($name) | empty($description) | empty($price) | empty($carbs) | empty($protein) | empty($fat)){
            $error = true;
            header("Location: posting.php?error =empty");
            exit();
        }

        // validate carbohydrates, protein, fat, and price to be positive integers
        if(!is_numeric($carbs) | !is_numeric($protein) | !is_numeric($fat) | !is_numeric($price)){
            $error = true;
            header("Location: posting.php?error=invalidnumber");
            exit();
        }

        if(!$error){

            // insert variables into the dishes table with pdo
            
            $sql = "INSERT INTO dishes (name, description, cuisine, diet, price, carbohydrates, protein, fat, image, chefid) VALUES (:name, :description, :cuisine, :diet, :price, :carbohydrates, :protein, :fat, :image, :chefid)";
            $stmt = $db->prepare($sql);
            //execute the query
            $stmt->execute(['name' => $name, 'description' => $description, 'cuisine' => $cuisine, 'diet' => $diet, 'price' => $price, 'carbohydrates' => $carbs, 'protein' => $protein, 'fat' => $fat, 'image' => $image, 'chefid' => $chefid]);

            // if successful
            if($stmt){

                echo "
                <!-- CDN for SweetAlert: Shows an alert when the user registers successfully -->
                <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <!-- CDN for JQuery -->
                <script src='https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js'></script>
                <script>
                    Swal.fire({
                        title: 'Success!',
                        text: 'Your meal has been posted!',
                        icon: 'success',
                        confirmButtonText: 'Keep posting'
                    }).then(function() {
                        window.location = 'posting.php';
                    });
                </script>
                ";
                exit();
            }
            else{
                header("Location: posting.php?error=sqlerror");
                exit();
            }
            
        }
    }

?>