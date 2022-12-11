

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Import bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="posting.css" />
  <link rel="stylesheet" href="navbar.css" />
  <link rel="stylesheet" href="footer.css" />
  <!-- CDN for SweetAlert: Shows an alert when the user registers successfully -->
  <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
  <!-- CDN for JQuery -->
  <script src='https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js'></script>
  <title>Maida - Post a new dish</title>
</head>

<body>
  <!-- NavBar Start -->
  <nav id="header">

  </nav>

  <!-- NavBar End -->

  <!-- Container starts -->

  <div class="maincontainer">
    <div class="container">
      <h1 align-text="left" style="color: #fa2c02; font-family: 'Pacifico', sans-serif" class=" ms-5">
        Post a new dish
      </h1>
      <form action="process_post.php" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="col-xl-6 col-xs-12">
            <div class="input-container ps-5 my-3">
              <label for="name">Name</label><br />
              <input type="text" id="name" name="name" /><br />
            </div>

            <div class="input-container ps-5 my-3">
              <label for="desc">Description</label>
              <br />
              <textarea type="text" id="desc" name="desc"></textarea>
              <br />
            </div>

            <div class="input-container ps-5 my-3">
              <label for="cuisine">Cuisine</label><br />
              <select id="cuisine" name="cuisine">
                <option value="none">None</option>
                <option value="italian">Italian</option>
                <option value="american">American</option>
                <option value="french">French</option>
                <option value="chinese">Chinese</option>
                <option value="japanese">Japanese</option>
                <option value="indian">Indian</option>
                <option value="spanish">Spanish</option>
                <option value="arabic">Arabic</option>
                <option value="thai">Thai</option>
                <option value="mexican">Mexican</option>
                <option value="turkish">Turkish</option>
                <option value="greek">Greek</option>
                <option value="german">German</option>
                <option value="korean">Korean</option>
                <option value="vietnamese">Vietnamese</option>
                <option value="carribean">Carribean</option>
                <option value="middleeastern">Middle Eastern</option>
                <option value="african">African</option>
              </select><br />
            </div>

            <div class="input-container ps-5 my-3">
              <label for="diet">Diet</label><br />
              <select id="diet" name="diet">
                <option value="none">None</option>
                <option value="vegetarian">Vegetarian</option>
                <option value="vegan">Vegan</option>
                <option value="glutenfree">Gluten Free</option>
                <option value="keto">Keto</option>
                <option value="lactosefree">Lactose Free</option>
                <option value="paleo">Paleo</option>
                <option value="pescatarian">Pescatarian</option>
                <option value="whole30">Whole30</option>

              </select><br />
            </div>

            <div class="input-container ps-5 my-3">
              <label for="price">Price</label><br />
              <input type="number" id="price" name="price" /><br />
            </div>

            <div class="input-container ps-5 my-3">
              <div class="my-3" style="font-size: x-large; color: #fa2c02">
                Nutritional Information
              </div>
              <p>
                <label for="carbs" class="pe-3">Carbohydrates</label>
                <input type="number" id="carbs" name="carbs" /><br />
              </p>
              <p>
                <label for="protein">Protein</label>
                <input type="number" id="protein" name="protein" /><br />
              </p>
              <p>
                <label for="fat">Fat</label>
                <input type="number" id="fat" name="fat" /><br />
              </p>
            </div>

          </div>
          <div class="col-xl-6 col-xs-12">
            <div class="col-lg col-sm-12 text-sm-center">
              <div class="w-100">
                <h2 class="py-4" style="color: #fa2c02">Photo</h2>
                <div class="imagecontainer mt-5 ms-5" id="imagecontainer">

                </div>
                
                <br>
                
                <input type="file" name="image" class="photo-file" id="image_input"/>


                <div class="container-fluid mt-5 d-flex justify-content-center">
                    <button name='clear' class="clear-btn">Clear fields</button>
                    <button class="post-btn" type="submit" name="submit">
                      Post meal
                    </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Container ends -->

  <!-- Footer Start -->

  <br />

  <footer class="footer">
    <div class="footer-addr">
      <h1 class="footer-logo">Maida</h1>

      <h2>Contact</h2>

      <address>
        Beirut, 1102<br />

        <a class="footer-btn" href="mailto:example@gmail.com">Email Us</a>
      </address>
    </div>

    <ul class="footer-nav">
      <li class="nav-item">
        <h2 class="nav-title">Social</h2>

        <ul class="nav-ul">
          <li>
            <a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a>
          </li>

          <li>
            <a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a>
          </li>

          <li>
            <a href="#"><i class="fa-brands fa-github"></i> Github</a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <h2 class="nav-title">Legal</h2>

        <ul class="nav-ul">
          <li>
            <a href="#">Privacy Policy</a>
          </li>

          <li>
            <a href="#">Terms of Use</a>
          </li>

          <li>
            <a href="#">Sitemap</a>
          </li>
        </ul>
      </li>
    </ul>
    <div class="legal">
      <p>&copy; 2022 Maida. All rights reserved.</p>

      <div class="legal-links">
        <span>A web project by Jamil Awada, Hanine Al Khatib and Rissal
          Hedna</span>
      </div>
    </div>
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