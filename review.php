<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="cart.css" />
  <link rel="stylesheet" href="navbar.css" />
  <link rel="stylesheet" href="footer.css" />
  <title>Maida - Leave a review</title>


</head>

<body>


  <!-- NavBar Start -->
  <nav id="header">

  </nav>
  <!-- NavBar End -->

  <div class="container">
    <div class="row w-100">
      <div class="col">
        <h1 style="
              line-height: 120px;
              display: flex;
              justify-content: center;
              align-items: center;
              margin-top: 100px;
            ">
          How was it?
        </h1>
        <h4 align="center">Your feedback is very important to the chef. Leave a review to let them know about your experience.</h4>
        <form action="leave_review.php" method="POST">
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Review</label>
            <textarea class="form-control mt-1" id="exampleFormControlTextarea1" rows="3" name="review"></textarea>
          </div>
          <div class="form-group mt-3">
            <label for="exampleFormControlSelect1">Rating</label>
            <select class="form-control mt-1" id="exampleFormControlSelect1" name="rating">
              <option value = "1">1 Stars</option>
              <option value = "2">2 Stars</option>
              <option value = "3">3 Stars</option>
              <option value = "4">4 Stars</option>
              <option value = "5">5 Stars</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary mt-3" style="background-color: orangered; border: none;">Submit</button>
        </form>

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
    $(document).ready(function() {
      $(".ItemContainer").on("click", "#delete", function() {
        var id = $(this).parent().parent().attr("id");
        $.ajax({
          url: "delete_cart_item.php",
          type: "POST",
          data: {
            id: id
          },
          success: function(data) {
            if (data == "deleted") {
              $("#" + id).remove();
            }
          }
        });

      });
    });
  </script>
</body>

</html>