<?php
session_start();
include_once('config.php');
// redirect to preauth.php if not logged in
if (!isset($_SESSION['username'])) {
  header('Location: preauth.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="search.css" />
  <link rel="stylesheet" href="footer.css" />
  <link rel="stylesheet" href="navbar.css" />

  <title>Maida - Search</title>
</head>

<body>
  <!-- NavBar Start -->
  <nav id="header">
    <!-- Loaded the Header through JQuery -->
  </nav>
  <!-- NavBar End -->
  <div class="container">
    <div class="row searchSection">
      <div class="header">
        <h1 style="font-family: 'Poppins', sans-serif">Search</h1>
        <p style="color: gray;">
          Browse through an extensive variety of local and foreign
          deliciousness!
        </p>
      </div>
      <div style="height:100px; text-align:center;">
        <div class="searchContainer" style="z-index: 999;">
          <img src="images/searchicon.png" alt="Search Icon" width="30px" class="searchIcon" />
          <input style="font-family: 'Poppins', sans-serif" type="text" class="searchBar" id="search" placeholder="Search meals" />
          <br>
        </div>
        <br>
        <ul style="height:100px;width:28.5rem;margin-top:-25px;border-radius:20px;" id="result">
        </ul>
      </div>


      <span class=""><button class="sortnfilter">
          Sort <i class="fa-solid fa-sort"></i>
        </button>
        <button class="sortnfilter">
          Filter <i class="fa-solid fa-filter"></i></button></span>
    </div>
    <div class="categoriesSection">
       <div class="section">
        <h2 class="listheader">Results</h2>
        <center>
          <div class="cardsList">

          <?php 

  if (empty($_GET['name'])) {
    echo "<h2>Search for something using the search bar above! Or take a look at our categories below!</h2>";
  }
  else {
    // get name from url
    $name = $_GET['name'];

    // if name exists
    if (isset($name)) {
    
      // select all dishes with name
      $sql = "SELECT * FROM dishes WHERE name LIKE '%$name%'";
      $query = $db->prepare($sql);
      $query->execute();
      $result = $query->fetchAll(PDO::FETCH_OBJ);
    
      // if result is not empty
      if ($query->rowCount() > 0) {

        foreach ($result as $row) {
          echo " <a href=\"process_order.php?id=$row->id\">
                    <div class='cardContainer'>
                      <div class='card'>
                        <img src='ImageUploads/" . $row->image . "' alt='Kebbe Image' />
                      </div>
                      <div class='cardDescription'>
                        <div class='name'>" . $row->name . "</div>
                        <div class='price'>" .
            $row->price . "L.L.</div>
                      </div>
                    </div>
                    </a>";
        }
      }
    
    }


      }





?>

          </div>
        </center>
      </div>
      <div class="section">
        <h2 class="listheader">Italian</h2>
        <center>
          <div class="cardsList">

            <?php
            // select all dishes with italian type
            $sql = "SELECT * FROM dishes WHERE cuisine = 'Italian'";
            $query = $db->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);

            // if result is not empty

            if ($query->rowCount() > 0) {
              foreach ($result as $row) {
                echo " 
                          <div class='cardContainer'>
                          <a href=\"process_order.php?id=$row->id\">
                            <div class='card'>
                              <img src='ImageUploads/" . $row->image . "' alt='Kebbe Image' />
                            </div>
                            <div class='cardDescription'>
                              <div class='name'>" . $row->name . "</div>
                              <div class='price'>" .
                  $row->price . "L.L.</div>
                            </div>
                            </a>
                          </div>
                          ";
              }
            }


            ?>

          </div>
        </center>
      </div>
      <div class="section">
        <center>
          <hr />
        </center>
        <h2 class="listheader">Turkish</h2>
        <center>
          <div class="cardsList">

            <?php
            // select all dishes with turkish type
            $sql = "SELECT * FROM dishes WHERE cuisine = 'Turkish'";
            $query = $db->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);

            // if result is not empty

            if ($query->rowCount() > 0) {
              foreach ($result as $row) {
                echo "
                          
                            <div class='cardContainer'>
                            <a href=\"process_order.php?id=$row->id\">
                              <div class='card'>
                                <img src='ImageUploads/" . $row->image . "' alt='Image' />
                              </div>
                              <div class='cardDescription'>
                                <div class='name'>" . $row->name . "</div>
                                <div class='price'>" .
                  $row->price . "L.L.</div>
                              </div>
                              </a>
                            </div>
                          
                          
                          ";
              }
            }
            ?>
          </div>
        </center>
      </div>
      <div class="section">
        <center>
          <hr />
        </center>
        <h2 class="listheader">Chinese</h2>
        <center>
          <div class="cardsList">
            <?php
            // select all dishes with chinese type
            $sql = "SELECT * FROM dishes WHERE cuisine = 'Chinese'";
            $query = $db->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);

            // if result is not empty

            if ($query->rowCount() > 0) {
              foreach ($result as $row) {
                echo " 
                          <div class='cardContainer'>
                            <a href=\"process_order.php?id=$row->id\">
                            <div class='card'>
                              <img src='ImageUploads/" . $row->image . "' alt='Kebbe Image' />
                            </div>
                            <div class='cardDescription'>
                              <div class='name'>" . $row->name . "</div>
                              <div class='price'>" .
                  $row->price . "L.L.</div>
                            </div>
                            </a>
                          </div>
                          ";
              }
            }




            ?>
          </div>
        </center>
      </div>
      <div class="section">
        <center>
          <hr />
        </center>
        <h2 class="listheader">Other</h2>
        <center>
          <div class="cardsList">
            <?php
            // select all dishes with italian type
            $sql = "SELECT * FROM dishes WHERE cuisine = 'None'";
            $query = $db->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);

            // if result is not empty

            if ($query->rowCount() > 0) {
              foreach ($result as $row) {
                echo " 
                          <div class='cardContainer'>
                          <a href=\"process_order.php?id=$row->id\">
                            <div class='card'>
                              <img src='ImageUploads/" . $row->image . "' alt='Kebbe Image' />
                            </div>
                            <div class='cardDescription'>
                              <div class='name'>" . $row->name . "</div>
                              <div class='price'>" .
                  $row->price . "L.L.</div>
                            </div>
                            </a>
                          </div>
                          ";
              }
            }


            ?>
          </div>
        </center>
      </div>
    </div>
  </div>
  <!-- Footer Start -->
  <br>
  <footer id="footer">

  </footer>

  <!-- include the jquery cdn -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- add the jquery code for header and footer -->
  <script>
    
    $(function() {
      $("#header").load("navbar.php");
      $("#footer").load("footer.php");
    });

  </script>

  <script>
    $(document).ready(function() {
      $('#search').keyup(function() {
        var input = $(this).val();
        if (input != "") {
          $.ajax({
            url: "process_search.php",
            method: "POST",
            data: {
              input: input
            },
            success: function(data) {
              $('#result').html(data);
            }
          });
        } else {
          $('#result').html("");
        }
      })
    })
  </script>
  <!-- Footer End -->
</body>

</html>