<?php

    include_once('config.php');

?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    

    header("Location: cart.php?id=$id");
   
}
?>