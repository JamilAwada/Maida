<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="navbar.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
      <link rel="stylesheet" href="order.css"/>
      <link rel="stylesheet" href="navbar.css"/>
      <link rel="stylesheet" href="footer.css"/>
      <title>Maida - Dish Name</title>
  </head>
<body>

  <!-- NavBar Start -->
<div>

    <?php
      if (isset($_SESSION['username'])) {
        echo '
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
           ';
         }else{
           echo '<label class="logo">Maida</label>';
         }
    ?>

  <script src="navbar.js"></script>

</div>

  <!-- NavBar End -->
  </body>
</html>
