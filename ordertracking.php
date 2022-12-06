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
            <div class="bar-container">
              <div class="progress-bar"></div>
            </div>
          </div>
          <div class="row images">
            <div class="image">
              <img src="OrderTrackingLogos/ordered.png" alt="" />
            </div>
            <div class="image">
              <img src="OrderTrackingLogos/confirmed.png" alt="" />
            </div>
            <div class="image">
              <img src="OrderTrackingLogos/delivered.png" alt="" />
            </div>
            <div class="image">
              <img src="OrderTrackingLogos/successful.png" alt="" />
            </div>
          </div>
        </div>
        <div class="row h4">
          <h4>Your order will be delivered soon</h4>
          <p>Order placed on Oct 17th, 2022</p>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
           <script type="text/javascript">
            $(function(){
              $("#header").load("navbar.php");
            });
          </script>
          
          <script type="text/javascript">
            $(function(){
              $("#footer").load("footer.php");
            });
          </script>
  </body>
</html>
