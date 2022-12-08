<?php

    include_once('config.php');

?>

<?php

    // click on a card to go to the dish page
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        

        header("Location: order.php?id=$id&name=$dishname");
       
    }
?>