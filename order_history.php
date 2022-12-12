<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Maida - Orders</title>
    <link rel="stylesheet" href="order_history.css" />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="footer.css" />
</head>
<body>
    <nav id= "header">
    </nav>

    <div class="container">
    <div class="row w-100">
      <div class="col">
        <h1 style="
              line-height: 120px;
              display: flex;
              justify-content: center;
              align-items: center;
              margin-top: 100px;
            ">
          My Past Orders
        </h1>
        <div class="card" style="margin: 20px">
          <div class="container" style="height:23rem; overflow-y: scroll;">
            <div class="row d-flex justify-content-center" style="padding: 20px">
              <?php
                session_start();
                include_once("config.php");
                $chefname = $_SESSION['username'];

                $sql = "SELECT * FROM orders WHERE chefname = '$chefname'";
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $orders = $stmt->fetchAll();

                foreach ($orders as $key => $value) {
                  $orderid = $value['id'];
                  $status = $value['status'];
                  $request = $value['request'];
                  $quantity = $value['quantity'];
                  $price = $value['price'];
                  $name = $value['dishname'];
                  $image = $value['image'];
                  
                  if($status == "Fulfilled"){
                    $total = (int)$price * (int)$quantity;
                  echo '<div id=' . $orderid . ' class="ItemContainer row" style="width:95%; border:1px solid orangered; padding:10px; border-radius:5px; margin-bottom:5px;">
                  <div class="col-2 d-flex align-items-center"><div class="imgcontainer" style="width:100px; height:50px; border-radius:5px; overflow:hidden;"><img width="100px" src="ImageUploads/' . $image . '"></div></div>
                  <div class="col-3 d-flex align-items-center">' . $name . '<span style ="color:orangered;">x' . $quantity . '</span></div>
                  <div class="col-4 d-flex align-items-center text-muted">' . $request . '</div>
                  <div class="col-3 d-flex align-items-center" style="color:orangered;">' . $total . 'L.L.</div>
                </div>';
                }
                  }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <footer id="footer">

    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $("#header").load("navbar.php");
        $("#footer").load("footer.php");
    </script>
</body>
</html>