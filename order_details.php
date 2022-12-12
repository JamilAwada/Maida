<?php
  include_once("config.php");
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
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="order_details.css" />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="footer.css" />
    <title>Maida - Incoming orders</title>
  </head>
  <body>
      <!-- NavBar Start -->
      <nav id="header">
      
      </nav>
      <!-- NavBar End -->

      <?php
        
        
        $order_id = $_GET['id'];

        $sql = "SELECT * FROM orders WHERE id = :order_id";
        $stmt = $db->prepare($sql);
        $stmt->execute(['order_id' => $order_id]);
        $order = $stmt->fetch();

        $customer_id = $order['customerid'];
        $sql = "SELECT * FROM users WHERE id = :customer_id";
        $stmt = $db->prepare($sql);
        $stmt->execute(['customer_id' => $customer_id]);
        $customer = $stmt->fetch();

        $address = $customer['address'];
        $city = $customer['city'];
        $district = $customer['district'];
        $phone = $customer['phone'];
        $username = $customer['username'];

        $price = $order['price'];
        $quantity = $order['quantity'];
        $dishname = $order['dishname'];
        $request = $order['request'];

        $total = (int)$price * (int)$quantity;

      ?>

    <div class="container">
      <div class="row w-100">
        <div class="col">
          <h1
            style="
              line-height: 120px;
              display: flex;
              justify-content: center;
              align-items: center;
            "
          >
            Order Details
          </h1>
          <div class="card" style="margin: 20px">
            <div class="container">
              <div class="row" style="padding: 20px">
                <div class="col-2">
                  <div
                    class="h-100 d-flex align-items-center justify-content-center"
                  >
                    <i
                      class="fa-solid fa-circle-user my-3 d-none d-lg-block"
                      style="font-size: 150px"
                    ></i>
                  </div>
                </div>
                <div class="col-4">
                  <div class="mt-3" style="font-size: 24px"><?php echo $username?></div>
                  
                  <div style="color: gray">
                    would like <?php echo $quantity?> orders of
                    <span style="color: #fa2c02"><?php echo $dishname?></span>
                  </div>
                  <div class="mt-3" style="font-size: 15px; color:blue;">+961 <?php echo $phone?></div>
                  <i
                    class="fa-solid fa-quote-left my-3"
                    style="font-size: 20px; color: #fa2c02"
                  ></i>
                  <div style="color: gray; font-style: italic">
                    <?php echo $request ?>
                  </div>
                  <div class="w-100 d-flex justify-content-end">
                    <i
                      class="fa-solid fa-quote-right my-3"
                      style="font-size: 20px; color: #fa2c02"
                    ></i>
                  </div>
                </div>
                <div class="col-6 text-center">
                  <i
                    class="fa-solid fa-location-dot my-3"
                    style="font-size: 40px; color: #fa2c02"
                  ></i>
                  <div>
                    <?php echo $address?>, <?php echo $city?>, <?php echo $district?>
                  </div>
                  <i
                    class="fa-solid fa-coins my-3"
                    style="font-size: 40px; color: #fa2c02"
                  ></i>
                  <div><?php echo $total?>L.L.</div>
                  <button
                    class="my-2 btn"
                    style="background-color: green; color: white"
                    onclick = "location.href='accept_order.php?id=<?php echo $order_id?>'"
                  >
                    Accept
                  </button>
                </div>
              </div>
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
