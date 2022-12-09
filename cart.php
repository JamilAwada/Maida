

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
    <link rel="stylesheet" href="cart.css" />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="footer.css" />
    <title>Maida - My cart</title>
  

  </head>
  <body>
    
    
      <!-- NavBar Start -->
      <nav id="header">
      
      </nav>
      <!-- NavBar End -->

    <div class="container">
      <div class="row w-100">
        <div class="col">
          <h1
            style="
              line-height: 120px;
              display: flex;
              justify-content: center;
              align-items: center;
              margin-top: 100px;
            "
          >
            My Cart
          </h1>
          <div class="card" style="margin: 20px">
            <div class="container" style = "height:23rem; overflow-y: scroll;">
              <div class="row d-flex justify-content-center" style="padding: 20px">
    
                    <?php
                      session_start();
                       // get the image, dishname, request, and price from cart in session variables
                        if(isset($_SESSION['cart'])){
                            $cart = $_SESSION['cart'];
                            $total = 0;
                            foreach($cart as $key => $value){
                              $total = (int)$value['price'] * (int)$value['quantity'];
                                echo '
                                <div id='.$value['id'].' class="ItemContainer row" style="width:95%; border:1px solid orangered; padding:10px; border-radius:5px; margin-bottom:5px;">
                                  <div class="col-2 d-flex align-items-center"><div class="imgcontainer" style="width:100px; height:50px; border-radius:5px; overflow:hidden;"><img width="100px" src="ImageUploads/'.$value['image'].'"></div></div>
                                  <div class="col-3 d-flex align-items-center">'.$value['name'].'<span style ="color:orangered;">x'.$value['quantity'].'</span></div>
                                  <div class="col-4 d-flex align-items-center text-muted">'.$value['request'].'</div>
                                  <div class="col-2 d-flex align-items-center" style="color:orangered;">'.$total.'L.L.</div>
                                  <div class="col-1 d-flex align-items-center justify-content-end">
                                  <i id="delete" class="fa fa-window-close" style="color:red;" aria-hidden="true"></i>
                                  </div>
                                </div>
                                ';
                            }
                        }
                    ?>
              </div>
              
            </div>
          </div>
        </div>
      </div>

        <!-- Footer Start -->
    
        <div id="footer">
        
        </div>
    
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

          <script>
            $(document).ready(function(){
              $(".ItemContainer").on("click", "#delete", function(){
                var id = $(this).parent().parent().attr("id");
                $.ajax({
                  url: "delete_cart_item.php",
                  type: "POST",
                  data: {id: id},
                  success: function(data){
                    if(data == "deleted"){
                      $("#"+id).remove();
                    }
                  }
                });
                
              });
            });
          </script>
  </body>
</html>
