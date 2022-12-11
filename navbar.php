<?php
session_start();
?>
<?php
if (isset($_SESSION['username'])) {
  echo '
        <div>
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
        </label>
        <label style="width:20px; margin:0px;margin-left:20px; padding:0px;" class="logo" onclick="window.location.href=\'home.php\'">Maida</label>
           <ul>
            <li>
              <a href="search.php">Browse <i class="fa-solid fa-magnifying-glass"></i></a>
             </li>
             <li>
               <a href="posting.php">New Post <i class="fa-solid fa-circle-plus"></i></a>
             </li>
             <li>
              <a href="cart.php">Cart <i class="fa-solid fa-cart-shopping"></i></a>
             </li>
             <li style="position:relative;">
              <a href="incoming_orders.php" style="padding-right:0;">Orders
              <div style="border-radius:25px; background-color:red;float:right;position:relative;width:20px;height:20px;
              margin-top:20px;"><p style="height:20px;width:20px;text-align:center;font-size:10px;margin-top:0;margin-bottom:0;font-weight:bold;">2</p></div>
              </a>
             </li>
             <li><a href="account.php">' . $_SESSION['username'] . '</a></li>
             <li>
               <a href="logout.php">Log out <i class="fa-solid fa-right-from-bracket"></i></a>
             </li>
           </ul>
           </div>
           ';
} else {
  echo '<label class="logo">Maida</label>';
  echo ' <ul><li>
           <a href="signup.php">Sign Up<i class="fa-solid "></i></a>
         </li>
         <li>
               <a href="preauth.php">Log In<i class="fa-solid "></i></a>
             </li>
         </ul>
         ';
}
?>

<script src="navbar.js"></script>