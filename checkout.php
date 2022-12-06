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

    <link rel="stylesheet" href="checkout.css" />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="footer.css" />
    <title>Maida - Order History</title>
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
            "
          >
            Checkout
          </h1>

          <div class="card" style="margin: 20px">
            <div class="container">
              <div class="row" style="padding: 20px">
                <div class="col col-6">
                  <div class="row">
                    <div class="mt-3" style="font-size: 20px">
                      (3) Kebbe Pieces
                    </div>
                    <div style="color: gray; font-style: italic">
                      Mashewe Abdel Rahmane
                    </div>
                    <div class="row">
                      <i
                        class="fa fa-calendar my-3"
                        aria-hidden="true"
                        style="font-size: 40px; color: #fa2c02"
                      ></i>
                      <div class="date">20/10/2022</div>
                    </div>
                  </div>
                </div>
                <div class="col col-6 text-center">
                  <i
                    class="fa-solid fa-location-dot my-3"
                    style="font-size: 40px; color: #fa2c02"
                  ></i>
                  <div class="location">
                    Room 602, Santona Residence, Beirut, Lebanon.
                  </div>
                  <i
                    class="fa-solid fa-coins my-3"
                    style="font-size: 40px; color: #fa2c02"
                  ></i>
                  <div>$24.99</div>
                  <button id="btt"
                    class="my-2 btn"
                  >
                    Checkout
                  </button>
                  <br />
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
