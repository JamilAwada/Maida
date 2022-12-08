<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" , initial-scale="1.0" />
  <title>Maida - My Chef Profile</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="Profile.css" rel="stylesheet" />
  <link rel="stylesheet" href="search.css" />
  <link rel="stylesheet" href="account.css" />
  <link rel="stylesheet" href="navbar.css" />
  <link rel="stylesheet" href="footer.css" />
</head>

<body>
  <!-- NavBar Start -->
  <nav id="header">
  </nav>
  <!-- NavBar End -->
  <!-- sticky icon start -->
  <div class="iconstick"><a class="notbutn" href="notifications.php">Orders</a>

    <div class=" text-center numorders">
      <p class="num">1</p>
    </div>
  </div>

  <!--Profile Container-->
  <div class="maincontainer">
    <div class="maintext">
      <span class="profile">Chef's Profile</span>
    </div>
    <div class="mainfixed">
      <div class="fixed">
        <li>
          <ul class="username">
            <strong>Username:</strong>
            <br />
            <ul>
              Hanine Al Khatib
            </ul>
          </ul>
          <br />

          <ul class="numberoforders">
            <strong>Number of Incoming Orders:</strong>
            <br />
            <ul>
              17
            </ul>
          </ul>
          <br />
          <ul class="email">
            <strong>Email:</strong>
            <br />
            <ul>
              hanine.alkhatib@gmail.com
            </ul>
          </ul>
          <br />
        </li>
      </div>
      <div class="fixed2">
        <img class="imgprofile" src="images/profile.png" />
      </div>
      <br />
    </div>
    <div class="buttons">
      <button class="bmydishes">Edit My Profile</button>
      <button class="bmydishes">View My Incoming Orders</button>
    </div>
  </div>
  <!--Profile Container End-->

  <center>
    <div class="container">
      <div class="mydishesHeader">
        <h2 class="dishesAvailable">My Dishes</h2>
        <hr />
      </div>
      <div class="slider">
        <center>
          <div class="cardsList">
            <div class="cardContainer">
              <div class="card">
                <img src="images/kebbe.jpeg" alt="Kebbe Image" />
              </div>
              <div class="cardDescription">
                <div class="name">Kebbe niyye</div>
                <div class="price">350.000L.L.</div>
              </div>
            </div>
            <div class="cardContainer">
              <div class="card">
                <img src="images/kebbe.jpeg" alt="Kebbe Image" />
              </div>
              <div class="cardDescription">
                <div class="name">Kebbe niyye</div>
                <div class="price">350.000L.L.</div>
              </div>
            </div>
            <div class="cardContainer">
              <div class="card">
                <img src="images/kebbe.jpeg" alt="Kebbe Image" />
              </div>
              <div class="cardDescription">
                <div class="name">Kebbe niyye</div>
                <div class="price">350.000L.L.</div>
              </div>
            </div>
            <div class="cardContainer">
              <div class="card">
                <img src="images/kebbe.jpeg" alt="Kebbe Image" />
              </div>
              <div class="cardDescription">
                <div class="name">Kebbe niyye</div>
                <div class="price">350.000L.L.</div>
              </div>
            </div>
            <div class="cardContainer">
              <div class="card">
                <img src="images/kebbe.jpeg" alt="Kebbe Image" />
              </div>
              <div class="cardDescription">
                <div class="name">Kebbe niyye</div>
                <div class="price">350.000L.L.</div>
              </div>
            </div>
          </div>
        </center>
      </div>
    </div>
  </center>


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