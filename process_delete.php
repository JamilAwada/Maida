<?php
    session_start();
    require_once('config.php');
    
?>

<?php 

    // get dish id from the url
    $id = $_GET['dishid'];

    // delete dish from database
    $sql = "DELETE FROM dishes WHERE id = '$id'";
    $query = $db->prepare($sql);
    $query->execute();

    // echo dish deleted successfully
    if($query){
        echo "
        <!-- CDN for SweetAlert: Shows an alert when the user registers successfully -->
        <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <!-- CDN for JQuery -->
        <script src='https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js'></script>
        <script>
            alert('Dish deleted successfully');
            window.location.href='account.php';

        </script>
    ";}
?>