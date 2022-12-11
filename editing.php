<?php
    require_once("config.php");
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();

    //if user is not logged in, redirect to login page
    if (!isset($_SESSION['username'])) {
        header("Location: preauth.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Import bootstrap -->
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
    <link rel="stylesheet" href="posting.css" />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="footer.css" />
    <title>Maida - Edit your dish</title>
  </head>
  <body>
          <!-- NavBar Start -->
          <nav id="header">
      
      </nav>
      <!-- NavBar End -->

      <?php


  // get id from url  
  $id = $_GET['dishid'];

  $sql = "SELECT * FROM dishes WHERE id = $id";

  $query = $db->prepare($sql);
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_OBJ);

  $dishname = $result[0]->name;
  $dishprice = $result[0]->price;
  $dishdescription = $result[0]->description;
  $dishimage = $result[0]->image;
  $dishdiet = $result[0]->diet;
  $dishcuisine = $result[0]->cuisine;
  $dishprotein = $result[0]->protein;
  $dishcarbohydrates = $result[0]->carbohydrates;
  $dishfat = $result[0]->fat;
  $dishchefid = $result[0]->chefid;
  $dishrating = $result[0]->rating;

  ?>

    <div class="maincontainer">
      <div class="container">
        <div class="row w-100">
          <h1
            align-text="left"
            style="color: #fa2c02; font-family: 'Pacifico', sans-serif"
            class="pt-4 ms-5 mt-5"
          >
            Edit dish
          </h1>
          <div class="col-lg col-sm-12">
            <form action = "process_edit.php?dishid=<?php echo $id ?>" method="POST" enctype="multipart/form-data">

            <div class="row">
            <div class="col-xl-6 col-xs-12">
              <div class="input-container ps-5 my-3">
                <label for="name">Name</label><br />
                <input type="text" id="name" name="name" value="<?php echo $dishname ?>" /><br />
              </div>

              <div class="input-container ps-5 my-3">
                <label for="desc">Description</label><br />
                <textarea type="text" id="desc" name="desc" placeholder=""><?php echo $dishdescription ?></textarea><br />
              </div>

              <div class="input-container ps-5 my-3">
                <label for="cuisine">Cuisine</label><br />
                <select id="cuisine" name="cuisine">
                  <option value="none" <?php echo ($dishcuisine == "none")?"selected":""; ?>>None</option>
                  <option value="italian" <?php echo ($dishcuisine == "italian")?"selected":""; ?>>Italian</option>
                  <option value="american" <?php echo ($dishcuisine == "american")?"selected":""; ?>>American</option>
                  <option value="french" <?php echo ($dishcuisine == "french")?"selected":""; ?>>French</option>
                  <option value="chinese" <?php echo ($dishcuisine == "chinese")?"selected":""; ?>>Chinese</option>
                  <option value="japanese" <?php echo ($dishcuisine == "japanese")?"selected":""; ?>>Japanese</option>
                  <option value="mexican" <?php echo ($dishcuisine == "mexican")?"selected":""; ?>>Mexican</option>
                  <option value="turkish" <?php echo ($dishcuisine == "turkish")?"selected":""; ?>>Turkish</option>
                  <option value="indian" <?php echo ($dishcuisine == "indian")?"selected":""; ?>>Indian</option>
                  <option value="thai" <?php echo ($dishcuisine == "thai")?"selected":""; ?>>Thai</option>
                  <option value="spanish" <?php echo ($dishcuisine == "spanish")?"selected":""; ?>>Spanish</option>
                  <option value="greek" <?php echo ($dishcuisine == "greek")?"selected":""; ?>>Greek</option>
                  <option value="german" <?php echo ($dishcuisine == "german")?"selected":""; ?>>German</option>
                  <option value="korean" <?php echo ($dishcuisine == "korean")?"selected":""; ?>>Korean</option>
                  <option value="vietnamese" <?php echo ($dishcuisine == "vietnamese")?"selected":""; ?>>Vietnamese</option>
                  <option value="middleeastern" <?php echo ($dishcuisine == "middleeastern")?"selected":""; ?>>Middle Eastern</option>
                  <option value="caribbean" <?php echo ($dishcuisine == "caribbean")?"selected":""; ?>>Caribbean</option>
                  <option value="african" <?php echo ($dishcuisine == "african")?"selected":""; ?>>African</option>
                  
  </select>
                <br />
              </div>

              <div class="input-container ps-5 my-3">
                <label for="diet">Diet</label><br />
                <select id="diet" name="diet">
                  <option value="none" <?php echo ($dishdiet == "none")?"selected":""; ?>>None</option>
                  <option value="vegetarian" <?php echo ($dishdiet == "vegetarian")?"selected":""; ?>>Vegetarian</option>
                  <option value="vegan" <?php echo ($dishdiet == "vegan")?"selected":""; ?>>Vegan</option>
                  <option value="glutenfree" <?php echo ($dishdiet == "glutenfree")?"selected":""; ?>>Gluten Free</option>
                  <option value="keto" <?php echo ($dishcuisine == "keto")?"selected":""; ?>>Keto</option>
                  <option value="lactosefree" <?php echo ($dishcuisine == "lactosefree")?"selected":""; ?>>Lactose Free</option>
                  <option value="paleo" <?php echo ($dishcuisine == "paleo")?"selected":""; ?>>Paleo</option>
                  <option value="pescatarian" <?php echo ($dishcuisine == "pescatarian")?"selected":""; ?>>Pescatarian</option>
                  <option value="whole30" <?php echo ($dishcuisine == "whole30")?"selected":""; ?>>Whole30</option>

                </select>
                <br />
              </div>

              <div class="input-container ps-5 my-3">
                <label for="price">Price</label><br />
                <input type="number" id="price" name="price" value="<?php echo $dishprice ?>"/><br />
              </div>

              <div class="input-container ps-5 my-3">
                <div class="my-3" style="font-size: x-large; color: #fa2c02">
                  Nutritional Information
                </div>
                <p>
                  <label for="carbs" class="pe-3">Carbohydrates</label>
                  <input type="number" id="carbs" name="carbs" value="<?php echo $dishcarbohydrates ?>"/><br />
                </p>
                <p>
                  <label for="protein">Protein</label>
                  <input type="number" id="protein" name="protein" value="<?php echo $dishprotein ?>"/><br />
                </p>
                <p>
                  <label for="fat">Fat</label>
                  <input type="number" id="fat" name="fat" value="<?php echo $dishfat ?>" /><br />
                </p>
              </div>
  </div>
            <div class="col-xl-6 col-xs-12">
            <div class="col-lg col-sm-12 text-sm-center">
            <div class="w-100">
              <h2 class="py-4" style="color: #fa2c02">Photo</h2>
              <div class="imagecontainer mt-5 ms-5" id="imagecontainer">
                  <img src="ImageUploads/<?php echo $dishimage ?>" alt="image" id="image" class="image" style="object-fit:contain; max-width: 100%; max-height:100%; border-radius: 10px; width:300px;"/>
                </div>
                </br>
              <div class="container-fluid">
                <div class="mt-5 text-center">
                  <button class="clear-btn">
                    <a href="account.php" style="text-decoration: none; color: inherit;">
                    Cancel
                    </a>
                  </button>
              
                  <button name='submit' class="save-btn" type="submit" >Save Changes</button>
                  <button name='delete' class="delete-btn" type="delete" >Delete</button>
                </div>
              </div>
            </div>
            </div>
            </div>
            </div>
            
            </form>
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

          <script>
          const image_input = document.getElementById('image_input');
                    
                    
          image_input.addEventListener('change', function(e) {
              var image = URL.createObjectURL(e.target.files[0]);
              var imageContainer = document.getElementById('imagecontainer');
              var newImage = document.createElement('img');
              newImage.style.objectFit = "contain";
              newImage.style.maxWidth = "100%";
              newImage.style.maxHeight = "100%";
              newImage.style.borderRadius = "10px";
              newImage.style.width = "300px";
              imageContainer.innerHTML = "";
              newImage.src = image;
              imageContainer.appendChild(newImage);
          });
          </script>
  </body>
</html>
