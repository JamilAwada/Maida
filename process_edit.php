<?php
    session_start();
    require_once('config.php');
    
?>


<?php 

   // get dish details from the form
    $name = $_POST['dishname'];
    $desc = $_POST['description'];
    $cuisine = $_POST['cuisine'];
    $diet = $_POST['diet'];
    $price = $_POST['price'];
    $carbs = $_POST['carbs'];
    $protein = $_POST['protein'];
    $fat = $_POST['fat'];
    $image = $_POST['image'];
    $id = $_POST['id'];

    // update the dish in the database
    $sql = "UPDATE dishes SET name = '$name', description = '$desc', cuisine = '$cuisine', diet = '$diet', price = '$price', image = '$image', carbohydrates = '$carbs', protein = '$protein', fat = '$fat' WHERE id = '$id'";
    $query = $db->prepare($sql);
    $query->execute();

    echo "
                <!-- CDN for SweetAlert: Shows an alert when the user registers successfully -->
                <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <!-- CDN for JQuery -->
                <script src='https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js'></script>
                <script>
                    Swal.fire({
                        title: 'Success!',
                        text: 'Your meal has been updated!',
                        icon: 'success',
                        confirmButtonText: 'My account'
                    }).then(function() {
                        window.location = 'account.php';
                    });
                </script>
    ";

?>