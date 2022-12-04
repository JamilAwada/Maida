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
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="navbar.css" />
    <title>Maida - Sign Up</title>
  </head>
  <body>
    <!-- NavBar Start -->
    <nav>
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Maida</label>
      <ul>
        <li>
          <a href="search.html"
            >Browse <i class="fa-solid fa-magnifying-glass"></i
          ></a>
        </li>
        <li>
          <a href="posting.html"
            >New Post <i class="fa-solid fa-circle-plus"></i
          ></a>
        </li>
        <li>
          <a href="#">Cart <i class="fa-solid fa-cart-shopping"></i></a>
        </li>
        <li><a href="Profile.html">Susan Smith</a></li>
        <li>
          <a href="home.html"
            >Log out <i class="fa-solid fa-right-from-bracket"></i
          ></a>
        </li>
      </ul>
    </nav>
    <script src="navbar.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.6.1.js"
      integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
      integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <!-- NavBar End -->

    <!-- Container  -->
    <div class="container">
      <div class="rectangle-register pb-5 mb-5">
        <div class="container">
          <div class="row gx-5">
            <div class="col">
              <img
                src="images/Register_Image.png"
                alt="Register Image"
                width="400px"
              />
              <h2>Trivia!</h2>
              <br />
              <i class="fa-solid fa-circle-question" style="font-size: 30px"></i
              ><br />
              <p>A peanut is a legume, not a nut!</p>
              <p></p>
            </div>
            <div class="ms-5 col">
              <div class="register-form-rectangle pb-5 text-center">
                <img src="images/logo.jpeg" alt="Maida logo" width="300px" />
                <form action="process_signup.php" method="POST">
                  <h2 class="primary-fg" align="center">Sign Up</h2>
                  <div class="input-box mt-4">
                    
                  <?php 
                    if(isset($_GET['username'])){
                      $username = $_GET['username'];
                      echo '<input type="text" name="username" value="'.$username.'" required/>';
                    }else{
                      echo '<input type="text" name="username" required/>';
                    }
                  ?>
                    <span>Username</span>
                  </div>
                  <div class="input-box mt-4">
                    <?php
                      if(isset($_GET['email'])){
                        $email = $_GET['email'];
                        echo '<input type="email" name="email" value="'.$email.'" required/>';
                      }else{
                        echo '<input type="email" name="email" required/>';
                      }
                    ?>

                    <span>Email</span>
                  </div>
                  <div class="input-box mt-4">
                    <input
                      type="password"
                      name="password"
                      required

                    />
                    <span>Password</span>
                  </div>
                  <button
                    class="login-btn primary-bg my-4"
                    type="submit"
                    name="submit"
                    id="submit"
                  >
                    Sign Up
                  </button>
                  <div class="forgot-pass mt-2">
                    <a href="preauth.php">Already have an account?</a>
                  </div>
                  <?php
                  
                  if(!isset($_GET['error'])){
                    exit();
                  }else{
                    $errorCheck = $_GET['error'];
                    if($errorCheck == "empty"){
                      echo "<p style='color:red;'>Fill in all fields!</p>";
                    }

                    else if($errorCheck == "invalidemail"){
                      echo "<p style='color:red;'>Choose a proper email!</p>";
                    }
                    else if($errorCheck == "shortpassword"){
                      echo "<p style='color:red;'>The password must be at least 6 characters long!</p>";
                    }
                    else if($errorCheck == "usernametaken"){
                      echo "<p style='color:red;'>Username already taken!</p>";
                    }

                    else if($errorCheck == "emailtaken"){
                      echo "<p style='color:red;'>Email already taken!</p>";
                    }
                  }

                ?>
                </form> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Start -->

    <br />

    <footer class="footer" style="position: relative">
      <div class="footer-addr">
        <h1 class="footer-logo">Maida</h1>

        <h2>Contact</h2>

        <address>
          Beirut, 1102<br />

          <a class="footer-btn" href="mailto:example@gmail.com">Email Us</a>
        </address>
      </div>

      <ul class="footer-nav">
        <li class="nav-item">
          <h2 class="nav-title">Social</h2>

          <ul class="nav-ul">
            <li>
              <a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a>
            </li>

            <li>
              <a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a>
            </li>

            <li>
              <a href="#"><i class="fa-brands fa-github"></i> Github</a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <h2 class="nav-title">Legal</h2>

          <ul class="nav-ul">
            <li>
              <a href="#">Privacy Policy</a>
            </li>

            <li>
              <a href="#">Terms of Use</a>
            </li>

            <li>
              <a href="#">Sitemap</a>
            </li>
          </ul>
        </li>
      </ul>
      <div class="legal">
        <p>&copy; 2022 Maida. All rights reserved.</p>

        <div class="legal-links">
          <span
            >A web project by Jamil Awada, Hanine Al Khatib and Rissal
            Hedna</span
          >
        </div>
      </div>
    </footer>
    <!-- Container ends -->

    <!-- Footer End -->
    
    <script
      src="https://code.jquery.com/jquery-3.6.1.js"
      integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
      integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
