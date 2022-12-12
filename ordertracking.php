<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="navbar.css" />
  <link rel="stylesheet" href="footer.css" />
  <link rel="stylesheet" href="preauth.css" />
  <link rel="stylesheet" href="ordertracking.css" />
  <title>Order Tracking</title>
</head>

<body>
  <!-- NavBar Start -->
  <nav id="header">

  </nav>
  <!-- NavBar End -->



  <div class="container">
    <div class="background">
      <div class="row">
        <h1>Order Status</h1>
      </div>
      <div class="shadow">
        <div class="row">
          <div class="progresscontainer w-100 mb-3">
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-label="Animated striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
            </div>
          </div>
          <div class="images">
            <div class="image">
              <div class="paircontainer d-flex flex-column align-items-center">
              <i class=" fa-solid fa-question" style="color: orangered; font-size: 32px;"></i>
              <br>
              <button class="btn btn-outline-success" id="btn1">Order Placed</button>
              </div>
              
            </div>
            <div class="image">
            <div class="paircontainer d-flex flex-column align-items-center">
              <i class="fa-solid fa-circle-check" style="color: orangered; font-size: 32px;"></i>
              <br>
              <button class="btn btn-outline-success" id="btn2">Order Confirmed</button>
              </div>
            </div>
            <div class="image">
            <div class="paircontainer d-flex flex-column align-items-center">
              <i class="fa-solid fa-motorcycle" style="color: orangered; font-size: 32px;"></i>
              <br>
              <button class="btn btn-outline-success" id="btn3">Order Picked</button>
              </div>
            </div>
            <div class="image">
            <div class="paircontainer d-flex flex-column align-items-center">
              <i class="fa-solid fa-clipboard-check" style="color: orangered; font-size: 32px;"></i>
              <br>
              <button class="btn btn-outline-success me-3" id="btn4">Order Delivered</button>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="row h4">
        <h4>Your order will be delivered soon</h4>
        <p>Order placed on <?php
                            // Setting timezone to lebanese time
                            date_default_timezone_set('Asia/Beirut');
                            // Returning current date from the remote server
                            $date = date('d-m-y h:i:s');
                            echo $date;
                            ?></p>

      </div>
      <div class="row">
        <a href="review.php" class="btn btn-success w-25">Leave a review</a>
      </div>
    </div>

    <script>
      var btn1 = document.getElementById("btn1");
      var btn2 = document.getElementById("btn2");
      var btn3 = document.getElementById("btn3");
      var btn4 = document.getElementById("btn4");

      var progress = document.getElementsByClassName("progress-bar");

      btn1.onclick = function() {
        progress[0].style.width = "25%";
      };

      btn2.onclick = function() {
        progress[0].style.width = "50%";
      };

      btn3.onclick = function() {
        progress[0].style.width = "75%";
      };

      btn4.onclick = function() {
        progress[0].style.width = "100%";
      };
    </script>

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