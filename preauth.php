<?php
  session_start();
  // check if user is logged in
  if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
  }

  // create a cart array and add it to the session variable
  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
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
    <link rel="stylesheet" href="preauth.css" />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="footer.css" />
    <title>Maida - Log In</title>
  </head>
  <body>
    <!-- navbar starts -->
    <nav id="header">

    </nav>
    <!-- navbar ends -->

    <!-- Container section -->
    <div class="container">
      <div class="row gx-0">
        <div class="col-lg-6 col-md-12">
          <img
            src="images/logo.png"
            class="main-logo"
            style="display: block; margin: auto"
          />
          <br>

          <ul class="logo-list primary-fg d-lg-block mb-5">
            <li>Experience a wide variety of cuisines</li>
            <li>Order local homemade meals</li>
            <li>Sell your culinary creations</li>
            <li>Track your order</li>
          </ul>

        </div>
        <div class="col-lg-6 col-md-8">
          <div class="rectangle ms-5 float-lg-end float-md-none">
          <form action="process_preauth.php" method="POST">
            <div class="container-2">
              <h2 class="primary-fg mt-5">Let's get cooking!</h2>
              <div class="input-box mt-5">
                <input type="email" name="email" required="required" />
                <span>Email</span>
              </div>
              <div class="input-box mt-4">
                <input type="password" name ="password" required="required" />
                <span>Password</span>
              </div>
              <?php
              if(isset($_GET['error'])){
                $errortype = $_GET['error'];
                if($errortype == 'invalid'){
                  print("<br><p style='color:red;'>Invalid email or password</p>");
                }
                else if ($errortype == 'empty'){
                  print("<br><p style='color:red;'>Please fill in all fields</p>");
                }
              }
              ?>
    
              

              <button type="submit" name ="submit" class="login-btn primary-bg mt-5">Log In</button>
              
              <div class="signup-btn mt-4">
                <a href="signup.php">First time user?</a>
              </div>
              
            </div>
            </form>
            
          </div>
        </div>
      </div>
      <br />
    </div>

    <!-- Container ends -->

   
    <!-- footer starts -->
    <div id="footer">

    </div>
    <!-- footer ends -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(function () {
        $("#header").load("navbar.php");
        $("#footer").load("footer.html");
      });
  </body>
</html>
