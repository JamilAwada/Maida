<?php
session_start();
include_once('config.php');
//if user is not logged in, redirect to login page
if (!isset($_SESSION['username'])) {
  header("Location: preauth.php");
  exit;
}
?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" , initial-scale="1.0" />
  <title>Maida - My Profile</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- get bootstrap cdn -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

  <link href="Profile.css" rel="stylesheet" />
  <link rel="stylesheet" href="search.css" />
  <link rel="stylesheet" href="account.css" />
  <link rel="stylesheet" href="navbar.css" />
  <link rel="stylesheet" href="footer.css" />
</head>

<body>
  <!-- NavBar Start -->
  <nav id="header">
  </nav>
  <!-- NavBar End -->


  <!--Profile Container-->
  <div class="maincontainer" style="margin-top:100px; padding:20px;">
    <div class="maintext">
      <span class="profile">My Profile</span>
    </div>

    <div class="mainfixed" style="padding:20px;">


      <h4 style="color:orangered;">Username</h4>
      <div style="background-color:lightgrey; padding:5px; border-radius:3px; width:90%" contenteditable="false" id="usernamefield" name="username"><?php echo $_SESSION['username'] ?></div>
      <br>
      <h4 style="color:orangered;">My Address:</h4>
      <div style="background-color:lightgrey; padding:5px; border-radius:3px; width:90%" contenteditable="false" id="addressfield" name="address"><?php
        // gett address from database
        $sql = "SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "'";
        $query = $db->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount() > 0) {
          foreach ($result as $row) {
            if ($row->address == "") {
              echo "No address added";
            } else {
              echo $row->address;
             }
          }
        }
        ?></div>
      <br>
      <h4 style="color:orangered;">Email:</h4>
      <div style="background-color:lightgrey; padding:5px; border-radius:3px; width:90%" contenteditable="false" id="emailfield" name="email"><?php echo $_SESSION['email'] ?></div>



      <br />
    </div>
    <div class="buttons">
      <input type="submit" class="changes1" name="save" style="display: none;" value="Save">
      <button class="changes2" style="display: none;"><i class="fa-solid fa-x"></i></button>
      <button class="btn btn-success" style="margin-bottom:10px; margin-top:10px;" id="editbtn"><span>Edit My Profile</span></button>
    </div>
  </div>
  <!--Profile Container End-->

  <center>
    <div class="container">
      <div class="mydishesHeader">
        <h2 class="dishesAvailable">My Dishes</h2>
        <hr />

      </div>
      <div class="slider">
        <center>
          <div class="cardsList">
            <?php
            // select all dishes from the database with chefid = $_SESSION['username']
            // for each dish, create a card with the dish name and price
            $sql = "SELECT * FROM dishes WHERE chefid LIKE '%{$_SESSION['username']}%'";
            $query = $db->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);

            // if result is not empty
            if ($query->rowCount() > 0) {
              foreach ($result as $row) {
                // wrap the container with a link that takes me to process_edit.php?dishid=$row->dishid
                echo "
                <div class='cardContainer'>
                <a id='exists' href=" . "editing.php?dishid=$row->id" . ">
                <div class='card'>
                
                  <img src='imageUploads/$row->image' alt='' />
                </div>
                <div class='cardDescription'>
                  <div class='name' style='color:black;'>$row->name</div>
                  
                  <div class='price'>".$row->price."L.L.</div>
                  
                </div>
                </a>
              </div>
              ";
              }
            } else {
              // center the div

              echo "<center id='noexist'><h2 style='color: black;'>You have not posted a dish yet.</h2>
              <br>
              <a id='postingbtn' class='mt-3' href='posting.php'><button class='btn btn-success'>Add Dish</button></a></center>";
            }

            ?>

          </div>
        </center>
      </div>
    </div>
    <br>
    <br>
  </center>
  <footer id="footer">

  </footer>


  <script>
    const editBtn = document.getElementById('editbtn');
    const emailField = document.getElementById('emailfield');
    const saveBtn = document.querySelector(".changes1");
    const cancelBtn = document.querySelector(".changes2");

    var email = emailField.innerHTML;

    var toggle = 0;

    editBtn.addEventListener('click', () => {
      if (toggle == 0) {
        saveBtn.style.display = "block";
        cancelBtn.style.display = "block";
        addressfield.contentEditable = true;
        toggle = 1;
      } else {

        toggle = 0;
      }

    });

    cancelBtn.addEventListener('click', () => {
      saveBtn.style.display = "none";
      cancelBtn.style.display = "none";
      emailField.contentEditable = false;
      addressfield.contentEditable = false;
      usernameField.innerHTML = username;
      emailField.innerHTML = email;
    });
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

  <script>
    // check if cards list has a direct child with id = 'noexist', if it does, add d-flex, justify-content-center and align-items-center to its class list

    var cardsList = document.querySelector(".cardsList");
    var noexist = document.getElementById("noexist");

    if (cardsList.contains(noexist)) {
      cardsList.classList.add("d-flex", "align-items-center", "justify-content-center");
    }
  </script>

  <script>
    // save the changes to the user email and username when save button clicked
    // storechanges in the database
    // reload the page
    $(document).ready(function() {
      $(".changes1").click(function() {
        var username = $("#usernamefield").text();
        var email = $("#emailfield").text();
        var address = $("#addressfield").text();
        $.ajax({
          url: "process_profileupdate.php",
          method: "POST",
          data: {
            username: username,
            email: email,
            address: address,
            id: <?php echo $_SESSION['id'] ?>
          },
          success: function(data) {
            location.reload();
          }
        });
      });
    });
  </script>

</body>

</html>