<?php
    require_once("config.php");
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();

    //if user is not logged in, redirect to login page
    if (!isset($_SESSION['username'])) {
        header("Location: preauth.php");
        exit;
    }
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
        
        if(!move_uploaded_file($image_tmp, $folder)){
            echo $_FILES["image"]["error"];
        }


        //make fields capitalized
        $name = ucwords($name);
        $description = ucwords($description);


        $error = false;
        if(empty($name) | empty($price) | empty($carbs) | empty($protein) | empty($fat) | empty($image)){
            $error = true;
            header("Location: posting.php?error=empty");
            exit();
        }

        if(!is_numeric($carbs) | !is_numeric($protein) | !is_numeric($fat) | !is_numeric($price)){
            $error = true;
            header("Location: posting.php?error=invalidnumber");
            exit();
        }

        if(!$error){

            
            $sql = "INSERT INTO dishes (name, description, cuisine, diet, price, carbohydrates, protein, fat, image, chefid) VALUES (:name, :description, :cuisine, :diet, :price, :carbohydrates, :protein, :fat, :image, :chefid)";



            $stmt = $db->prepare($sql);

            $stmt->execute(['name' => $name, 'description' => $description, 'cuisine' => $cuisine, 'diet' => $diet, 'price' => $price, 'carbohydrates' => $carbs, 'protein' => $protein, 'fat' => $fat, 'image' => $image, 'chefid' => $chefid]);


            if($stmt){
                
                header("Location: posting.php?success=posted");
                exit();
            }
            else{
                header("Location: posting.php?error=sqlerror");
                exit();
            }
            
        }
    }
    else if(isset($_POST['clear'])){
        //clear all fields in the form
        header("Location: posting.php");
        exit();
    }


?>