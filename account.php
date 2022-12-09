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
  <!-- sticky icon start -->
  <div class="iconstick"><a class="notbutn" href="notifications.php">Orders</a>

    <div class=" text-center numorders">
      <p class="num">1</p>
    </div>
  </div>

  <!--Profile Container-->
  <div class="maincontainer">
    <div class="maintext">
      <span class="profile">My Profile</span>
    </div>

    <div class="mainfixed">
      <div class="fixed">
        <li>
          <ul class="username">
            <strong>Username:</strong>
            <br />
            <ul>
              <div contenteditable="false" id="usernamefield" name="username"><?php echo $_SESSION['username'] ?></div>
            </ul>
          </ul>
          <br />

          <ul class="numberoforders">
            <strong>My Standing:</strong>
            <br />
            <ul>
              Gold
            </ul>
          </ul>
          <br />
          <ul class="email">
            <strong>Email:</strong>
            <br />
            <ul>
              <div contenteditable="false" id="emailfield" name="email"><?php echo $_SESSION['email'] ?></div>
            </ul>
          </ul>
          <br />
        </li>
      </div>
      <div class="fixed2">
        <img class="imgprofile" src="images/profile.png" />
      </div>
      <br />
    </div>
    <div class="buttons">
      <input type="submit" class="changes1" name="save" style="display: none;" value="Save">
      <button class="changes2" style="display: none;"><i class="fa-solid fa-x"></i></button>
      <button class="bmydishes" id="editbtn">Edit My Profile</button>
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
                echo "<div class='cardContainer'>
                <div class='card'>
                  <img src='imageUploads/$row->image' alt='' />
                </div>
                <div class='cardDescription'>
                  <div class='name'>$row->name</div>
                  <div class='price'>$row->price</div>
                </div>
              </div>";
              }
            }

            ?>

          </div>
        </center>
      </div>
    </div>
    <br>
    <br>
  </center>


  <script>
    const editBtn = document.getElementById('editbtn');
    const usernameField = document.getElementById('usernamefield');
    const emailField = document.getElementById('emailfield');
    const saveBtn = document.querySelector(".changes1");
    const cancelBtn = document.querySelector(".changes2");

    var username = usernameField.innerHTML;
    var email = emailField.innerHTML;

    var toggle = 0;

    editBtn.addEventListener('click', () => {
      if (toggle == 0) {
        saveBtn.style.display = "block";
        cancelBtn.style.display = "block";
        usernameField.contentEditable = true;
        emailField.contentEditable = true;
        toggle = 1;
      } else {

        toggle = 0;
      }

    });

    cancelBtn.addEventListener('click', () => {
      saveBtn.style.display = "none";
      cancelBtn.style.display = "none";
      usernameField.contentEditable = false;
      emailField.contentEditable = false;
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
    // save the changes to the user email and username when save button clicked
    // storechanges in the database
    // reload the page
    $(document).ready(function() {
      $(".changes1").click(function() {
        var username = $("#usernamefield").text();
        var email = $("#emailfield").text();
        $.ajax({
          url: "process_profileupdate.php",
          method: "POST",
          data: {
            username: username,
            email: email,
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