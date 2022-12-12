<?php
    session_start();
    require_once('config.php');
    
?>

<?php 

    $id = $_GET['dishid'];

    $sql = "DELETE FROM dishes WHERE id = '$id'";
    $query = $db->prepare($sql);
    $query->execute();

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