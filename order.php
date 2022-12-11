<?php
include_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="order.css" />
  <link rel="stylesheet" href="navbar.css" />
  <link rel="stylesheet" href="footer.css" />
  <title>Maida - Dish Name</title>
</head>

<body>

  <!-- NavBar Start -->
  <nav id="header">
  </nav>
  <!-- NavBar End -->

  <?php


  // get id of the dish from url  
  $id = $_GET['id'];

  $sql = "SELECT * FROM dishes WHERE id = $id";

  $query = $db->prepare($sql);
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_OBJ);

  $dishname = $result[0]->name;
  $dishdescription = $result[0]->description;
  $dishprice = $result[0]->price;
  $dishimage = $result[0]->image;
  $dishchefid = $result[0]->chefid;
  $dishcarbohydrates = $result[0]->carbohydrates;
  $dishprotein = $result[0]->protein;
  $dishfat = $result[0]->fat;
  
  $dishchefname = $result[0]->chefid;

  $dishrating = $result[0]->rating;

  ?>

  <div class="container1 mt-3">
    <div class="subcontainer d-flex p-3">
      <div class="row w-100">
        <div class="col-lg-6">
          <div class="d-flex justify-content-center">
            <div class="imagecontainer mt-5">
              <img src="imageUploads/<?php echo $dishimage ?>" style="object-fit: contain;max-width:100%; max-height: 100%;border-radius: 10px; width: 300px;"></img>
            </div>


          </div>

          <div align="center" style="color: orangered; text-indent: 10px;" class="d-flex align-items-center justify-content-center my-3"><i class="fa-regular fa-face-smile mt-5" style="font-size: 50px; color: orangered;"></i><a class="chef mt-5" href="account.html"><?php echo $dishchefid ?></a></div>

        </div>
        <div class="col-lg-6">
          <div class="rogw">
            <div class="d-flex justify-content-between align-items-center">
              <h2 class="mt-5 title text-dark"><?php echo $dishname ?></h2>
              <span style="color: orangered; font-size: larger;"><i class="fa-solid fa-star mt-" style="color: gold;"></i> <?php echo $dishrating ?></span>
              <h3 class="mt-5 title"><?php echo $dishprice ?>L.L.</h3>
            </div>
            <div class="divider ms-2 my-2" style="width: 100%"></div>
            <p class="description" style="font-size:small;"><?php echo $dishdescription ?></p><br />
            <p style="color: orangered;">Nutrition Facts: <br> <?php echo $dishcarbohydrates ?>g <i class="fa-solid fa-c"></i> <br> <?php echo $dishprotein ?>g <i class="fa-solid fa-p"></i> <br> <?php echo $dishfat ?>g <i class="fa-solid fa-f"></i></p>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <label>Quantity</label>
              <br>
              <input name="quantity" id="quantity" type="number">
              <br>
              <label class="mt-2">Any requests?</label>
              <br>
              <textarea type="text" id="request" name="request" style="width: 15em"></textarea>
            </div>
            <div class="col-lg-6">

            </div>
            <button name="cart" id="cart" class='w-25 py-2 mt-5 add-btn'>Add to cart</button>

          </div>

        </div>
      </div>
    </div>
  </div>




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
    $(function() {
      $("#header").load("navbar.php");
    });
  </script>

  <script type="text/javascript">
    $(function() {
      $("#footer").load("footer.php");
    });
  </script>

  <!-- add cdn for sweet alert 3 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
    //create an array of cart items
    // add the dish id to the array when the add to cart button is clicked
    // add the array to the session variable
    // use ajax and jquery

    $(document).ready(function() {
      $("#cart").click(function() {


        var id = <?php echo $id ?>;
        var quantity = $("#quantity").val();
        var request = $("#request").val();

        var price = <?php echo $dishprice ?>;
        var dishname = "<?php echo $dishname ?>";
        var image = "<?php echo $dishimage ?>";

        var chefname = "<?php echo $dishchefname ?>";
        var name = "<?php echo $dishname ?>";

        $.ajax({
          url: "process_add_tocart.php",
          method: "POST",
          data: {

            id: id,
            quantity: quantity,
            request: request,
            name: dishname,
            image: image,
            price: price,
            image: image,
            chefname: chefname,
  
          },
          success: function(data) {

            Swal.fire({
              icon: 'success',
              title: data,
              showConfirmButton: false,
              timer: 1500,
            }).then(function() {
              window.location = "cart.php";
            });
          }
        });
      });
    });
  </script>


</body>

</html>