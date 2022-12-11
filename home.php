<?php
session_start();
// if (isset($_SESSION['username'])) {
//   header("Location: home.php");
//   exit();
// }

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="home.css" />
  <link rel="stylesheet" href="navbar.css" />
  <link rel="stylesheet" href="footer.css" />

  <title>Maida - Home</title>
</head>

<body>
  <!-- NavBar Start -->
  <nav id="header">

    <!-- Loaded the Header through JQuery -->

  </nav>
  <!-- NavBar End -->

  <!--Main Top-->
  <div class="topbackground">
    <span class="welcometext">Welcome To Maida</span>
    <span class="descriptiontop">where Teta's the CEO</span>
  </div>
  <br>


  <!-- Goals Container-->
  <div class="maincol" id="1">
    <div class="leftdiv">
      <span class="servegoal">What We Serve</span>
    </div>
    <br>
    <div class="rowcontainer">
      <div class="textcontainer">

        <div class="titleout">
          <span class="titlein">Hundreds of daily homemade dishes</span>
        </div>
        <div class="paraout">
          <span class="parain">Find your favorite freshly made dish and order after signing up!</span>
          <div class="Alinks">
            <?php if (isset($_SESSION['username'])) {
              echo '<button class="bmydishes" onclick="location.href=\'search.php\'" type="button">Browse</button>';
            } else {
              echo '<button class="bmydishes" onclick="location.href=\'preauth.php\'" type="button">Sign Up</button>';
            }
            ?>

          </div>
        </div>
      </div>

      <div class="imgcontainer">
        <img class="dish" src="images/ch.jpg">
      </div>

    </div>

    <!-- Goals Container2-->
    <div class="rowcontainer" id="2">
      <div class="imgcontainer">
        <img class="dish2" src="images/pasta.jpg">
      </div>
      <div class="textcontainer">
        <div class="titleout">
          <span class="titlein">We support your local business</span>
        </div>
        <div class="paraout">
          <span class="parain">Post your own homemade meals!</span>
          <div class="Alinks">
            <?php

            // if the user is logged in, direct to posting.php
            // if the user is not logged in, direct to preauth.php
            if (isset($_SESSION['username'])) {
              echo '<button class="bmydishes" onclick="location.href=\'posting.php\'" type="button">Post Now</button>';
            } else {
              echo '<button class="bmydishes" onclick="location.href=\'preauth.php\'" type="button">Post Now</button>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Goals Container3-->
    <div class="maincol" id="3">
      <div class="rowcontainer">

        <div class="textcontainer">

          <div class="titleout">
            <span class="titlein">Experience new culinary creations</span>
          </div>
          <div class="paraout">
            <span class="parain">Explore a wide variety of authentic cuisines from around the world</span>
            <div class="Alinks">
              <?php
              if (isset($_SESSION['username'])) {
                echo '<button class="bmydishes" onclick="location.href=\'search.php\'" type="button">Order Dish</button>';
              } else {
                echo '<button class="bmydishes" onclick="location.href=\'preauth.php\'" type="button">Order Dish</button>';
              }
              ?>
            </div>
          </div>
        </div>

        <div class="imgcontainer">
          <img class="dish" src="images/friedchicken.jpg">
        </div>

      </div>
      <br>
      <div class="container card pb-5 pt-4 px-5 pe-0">
        <h2>Today's best seller</h2>
        <div class="row">
          <div class="col">

            <h6 style="color: orangered">by &nbsp;<i class="fa-solid fa-crown" style="color:gold;"></i>&nbsp; <a class="links" href="signup.php">Rissal Hedna</a> </h6>
            <h3>Mashawi Family Set</h3>
            <div style="color: #999">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est cum culpa reprehenderit omnis nulla ad delectus eum, deleniti quos eligendi asperiores harum, vitae quae, suscipit at similique? Eos, aliquid nemo.</div>
          </div>
          <div class="col d-flex justify-content-center">
            <img src="images/mashawi.jpeg" alt="" class="w-50 h-auto popdish" style="border-radius: 7px">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer Start -->
  <footer id="footer">
  </footer>
  <!-- Footer End -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#header").load("navbar.php");
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#footer").load("footer.php");
    });
  </script>
</body>

</html>