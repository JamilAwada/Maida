<?php
    session_start();
    require_once('config.php');
    
?>


<?php 
// clicking on the button takes the username and email from the fields and updates the database
if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $id = $_POST['id'];

  //update session variables
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    
  $sql = "UPDATE users SET username = '$username', email = '$email' WHERE id = '$id'";
  $query = $db->prepare($sql);
  $query->execute();

  echo "Profile updated successfully";
}

?>
