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
        <label class="logo">Maida</label>
           <ul>
            <li>
              <a href="search.html">Browse <i class="fa-solid fa-magnifying-glass"></i></a>
             </li>
             <li>
               <a href="posting.html">New Post <i class="fa-solid fa-circle-plus"></i></a>
             </li>
             <li>
              <a href="#">Cart <i class="fa-solid fa-cart-shopping"></i></a>
             </li>
             <li><a href="Profile.html">'.$_SESSION['username'].'</a></li>
             <li>
               <a href="logout.php">Log out <i class="fa-solid fa-right-from-bracket"></i></a>
             </li>
           </ul>
           </div>
           ';
         }else{
           echo '<label class="logo">Maida</label>';
         }
    ?>

  <script src="navbar.js"></script>