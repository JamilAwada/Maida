<?php
    session_start();
    require_once('config.php');
    
?>


<?php 
// clicking on the button takes the username and email from the fields and updates the database
if (isset($_POST['username'])) {


  $email = $_POST['email'];
  $address = $_POST['address'];
  $id = $_POST['id'];

  $_SESSION['email'] = $email;    

  $sql = "UPDATE users SET email = '$email', address = '$address' WHERE id = '$id'";
  $query = $db->prepare($sql);
  $query->execute();

  echo "Profile updated successfully";
}

?>
