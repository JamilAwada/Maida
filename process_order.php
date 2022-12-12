<?php

    include_once('config.php');

?>

<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $dishname = $_GET['name'];
        header("Location: order.php?id=$id&name=$dishname");
       
    }
?>