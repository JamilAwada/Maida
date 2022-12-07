<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="order.css"/>
    <link rel="stylesheet" href="navbar.css"/>
    <link rel="stylesheet" href="footer.css"/>
    <title>Maida - Dish Name</title>
</head>
<body>

      <!-- NavBar Start -->
      <nav id="header">
      </nav>
      <!-- NavBar End -->

      <?php

    include_once('config.php');

?>

      <?php 
      // get id from url  
      $id = $_GET['id'];

      $sql = "SELECT * FROM dishes WHERE id = $id";

      $query = $db->prepare($sql);
      $query->execute();
      $result = $query->fetchAll(PDO::FETCH_OBJ);
      $dishname = $result[0]->name;
      $dishprice = $result[0]->price;
      $dishdescription = $result[0]->description;
      $dishimage = $result[0]->image;
      $dishcuisine = $result[0]->cuisine;
      $dishprotein = $result[0]->protein;
      $dishcarbohydrates = $result[0]->carbohydrates;
      $dishfat = $result[0]->fat;
      $dishchefid = $result[0]->chefid;
      $dishrating = $result[0]->rating;


      

      ?>

    <div class="container1">
      <div class="subcontainer">
        <div class="row w-100">
          <div class="col-lg-6">
              <div class="d-flex justify-content-center">
                <div class="imagecontainer mt-5" style=" ">
                  <img src="imageUploads/<?php echo $dishimage ?>" style="object-fit: contain;max-width:100%; max-height: 100%;border-top-right-radius: 10px; border-bottom-right-radius: 10px;"></img>
                </div>
                
                
              </div>
              <div class="">
                <div align="center" style="color: orangered; text-indent: 10px;" class="d-flex align-items-center justify-content-center my-3"><i class="fa-regular fa-face-smile mt-5" style="font-size: 50px; color: orangered;"></i><a class="chef mt-5" href="account.html"><?php echo $dishchefid ?></a></div>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="row">
                  <div class="col-lg-12"></div>
                  <div class="d-flex justify-content-between align-items-center">
                    <h2 align="left" class="mt-5 title"><?php echo $dishname ?></h2>
                    <span style="color: orangered; font-size: larger;"><i class="fa-solid fa-star mt-" style="color: gold;"></i> <?php echo $dishrating ?></span>
                  </div>
                  <div class="divider ms-2 my-2" style="width: 100%"></div>
                  <p class="description" style="font-size:small;"><?php echo $dishdescription ?></p><br/>
                  <p style="color: orangered;">Nutrition Facts: <?php echo $dishcarbohydrates ?> <i class="fa-solid fa-c"></i> <?php echo $dishprotein ?>  <i class="fa-solid fa-p"></i> <?php echo $dishfat ?>  <i class="fa-solid fa-f"></i></p>
              </div>
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                      <label>Quantity</label>
                      <br>
                      <input type="number"><br>
                      <label class="mt-2">Any requests?</label>
                      <br>
                      <textarea type="text" id="request" name="request" style="width: 15em"></textarea>
                  </div>
                  <div class="col-lg-6">
                      
                  </div>
                  <button class="w-25 py-2 mt-5 add-btn">Add to cart</button>
              </div>
              
          </div>
      </div>
  </div>
      </div>
        
      

    <div class="divider"></div>

    <!-- Testimonials -->

    <div class="container2 mt-5 mb-5">
      <h1 align="center" class="">Reviews</h1><br>
      <div class="row mb-3">
           
        <div class="col-lg-6 col-md-12 p-0">
          
          <div class="card text-center">
            <i class="fa-solid fa-user-pen my-4" style="font-size: 100px;"></i><br>
            <strong class="py-2">Karen Smith</strong>
            <p class="px-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis minima, temporibus velit odit animi assumenda officiis obcaecati delectus vel quasi hic voluptatum sunt accusantium in molestiae beatae, veritatis quia aperiam?</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card text-center">
            <i class="fa-solid fa-user-pen my-4" style="font-size: 100px;"></i><br>
            <strong class="py-2">Karen Smith</strong>
            <p class="px-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis minima, temporibus velit odit animi assumenda officiis obcaecati delectus vel quasi hic voluptatum sunt accusantium in molestiae beatae, veritatis quia aperiam?</p>
            </div>
        </div>
      </div>
      <div class="row">
           
        <div class="col-lg-6 col-md-12 p-0">
          
          <div class="card text-center">
            <i class="fa-solid fa-user-pen my-4" style="font-size: 100px;"></i><br>
            <strong class="py-2">Karen Smith</strong>
            <p class="px-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis minima, temporibus velit odit animi assumenda officiis obcaecati delectus vel quasi hic voluptatum sunt accusantium in molestiae beatae, veritatis quia aperiam?</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card text-center">
          <i class="fa-solid fa-user-pen my-4" style="font-size: 100px;"></i><br>
          <strong class="py-2">Karen Smith</strong>
          <p class="px-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis minima, temporibus velit odit animi assumenda officiis obcaecati delectus vel quasi hic voluptatum sunt accusantium in molestiae beatae, veritatis quia aperiam?</p>
          </div>
        </div>
      </div>
        

        

    </div>

    <!-- Nut Facts -->
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