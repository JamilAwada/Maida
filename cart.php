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
            <div class="container">
              <div class="row d-flex justify-content-center" style="padding: 20px">

                    <div class="ItemContainer row" style="width:95%; border:1px solid orangered; padding:10px; border-radius:5px; margin-bottom:5px;">
                      <div class="col-3 d-flex align-items-center"><div class="imgcontainer" style="width:100px; height:50px; border-radius:5px; overflow:hidden;"><img width="100px" src="ImageUploads/kebbe-libanaise-3-780x470.jpg.webp"></div></div>
                      <div class="col-2 d-flex align-items-center">Chef Rissal</div>
                      <div class="col-4 d-flex align-items-center text-muted">Lorem ipsum dolor sit amet, consectetur adipis.</div>
                      <div class="col-2 d-flex align-items-center" style="color:orangered;">150000L.L.</div>
                      <div class="col-1 d-flex align-items-center justify-content-end">
                      <i class="fa fa-window-close" style="color:red;" aria-hidden="true"></i>
                      </div>
                    </div>

                    <div class="ItemContainer row" style="width:95%; border:1px solid orangered; padding:10px; border-radius:5px; margin-bottom:5px;">
                      <div class="col-3 d-flex align-items-center"><div class="imgcontainer" style="width:100px; height:50px; border-radius:5px; overflow:hidden;"><img width="100px" src="ImageUploads/kebbe-libanaise-3-780x470.jpg.webp"></div></div>
                      <div class="col-2 d-flex align-items-center">Chef Rissal</div>
                      <div class="col-4 d-flex align-items-center text-muted">Lorem ipsum dolor sit amet, consectetur adipis.</div>
                      <div class="col-2 d-flex align-items-center"  style="color:orangered;">150000L.L.</div>
                      <div class="col-1 d-flex align-items-center justify-content-end">
                      <i class="fa fa-window-close" style="color:red;" aria-hidden="true"></i>
                      </div>
                    </div>

                    <div class="ItemContainer row" style="width:95%; border:1px solid orangered; padding:10px; border-radius:5px; margin-bottom:5px;">
                      <div class="col-3 d-flex align-items-center"><div class="imgcontainer" style="width:100px; height:50px; border-radius:5px; overflow:hidden;"><img width="100px" src="ImageUploads/kebbe-libanaise-3-780x470.jpg.webp"></div></div>
                      <div class="col-2 d-flex align-items-center">Chef Rissal</div>
                      <div class="col-4 d-flex align-items-center text-muted">Lorem ipsum dolor sit amet, consectetur adipis.</div>
                      <div class="col-2 d-flex align-items-center"  style="color:orangered;">150000L.L.</div>
                      <div class="col-1 d-flex align-items-center justify-content-end">
                      <i class="fa fa-window-close" style="color:red;" aria-hidden="true"></i>
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
