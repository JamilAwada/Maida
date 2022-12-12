<?php
    session_start();
    require_once('config.php');
    
?>


<?php 

    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $cuisine = $_POST['cuisine'];
    $diet = $_POST['diet'];
    $price = $_POST['price'];
    $carbs = $_POST['carbs'];
    $protein = $_POST['protein'];
    $fat = $_POST['fat'];
    $id = $_GET['dishid'];


    $sql = "UPDATE dishes SET name = '$name', description = '$desc', cuisine = '$cuisine', diet = '$diet', price = '$price', carbohydrates = '$carbs', protein = '$protein', fat = '$fat' WHERE id = '$id'";
    $query = $db->prepare($sql);
    $query->execute();

    if($query){
        echo "
        <script>
            alert('Dish updated successfully');
            window.location.href='account.php';
        </script>
";

    }
  

?>