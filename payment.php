<?php
session_start();
// if (isset($_SESSION['username'])) {
//   header("Location: home.php");
//   exit();
// }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="payment.css" />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="footer.css" />
    <title>Maida - Payment</title>
</head>

<body class="maincol">
    <!-- NavBar Start -->
    <nav id="header">
        <!-- Loaded the Header through JQuery -->
    </nav>
    <div class="container">
            <div class="row">
                <div class="col col-md-5 col-12">
                    <div class="right-container">
                        <div class="total">
                            <div class="leftbx">Cart Total: X$
                            </div>
                            <div class="rightbx">
                                <button class="bcart" onclick="window.location.href='cart.php';">Back To Cart</button>
                            </div>
                        </div>
                        <div class="listitems">
                            <br>
                            <br>
                            <input type="text" id="fname" name="fname" placeholder="Your first name here...">
                            <br>
                            <input type="text" id="lname" name="lname" placeholder="Your last name here...">

                            <label for="kazaa">Kazaa</label>
                            <select id="kazaa" name="kazaa">
                                <option value="beirut">Beirut</option>
                                <option value="chouf">Chouf</option>
                                <option value="south">South</option>
                            </select>
                            <label for="city">City</label>
                            <select id="city" name="city">
                                <option value="akkar">Akkar</option>
                                <option value="aley">Aley</option>
                                <option value="baabda">Baabda</option>
                                <option value="baalbek">Baalbek</option>
                                <option value="batroun">Batroun</option>
                                <option value="bcharreh">Bcharreh</option>
                                <option value="bentjbeil">Bent Jbeil</option>
                                <option value="beqaa">Beqaa</option>
                                <option value="beirut">Beirut</option>
                                <option value="chouf">Chouf</option>
                                <option value="hasbaiya">Hasbaiya</option>
                            </select>
                            <br>
                            <input type="text" id="addr" name="ad1" placeholder="Your address description here...">
                            <br>
                            <input type="text" id="numb" name="numb" placeholder="Your number here...">
                            <button class="bcart" id="subb">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="col col-md-7 col-12">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12" id="rightColumn">
                            <img width="400px" src="images/address.png" alt="hooman">
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <br>


    </div>

    <!-- Footer Start -->
    <footer id="footer">
        <!-- Loaded the Footer through JQuery -->
    </footer>

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
        // when submit is clicked display credit_card.php under the image
        // use ajax with XMLHttpRequest
        // use php to get the data from the form
        // use php to display the data in credit_card.php
        var submit = document.getElementById("subb");
        submit.addEventListener("click", function() {
            var fname = document.getElementById("fname").value;
            var lname = document.getElementById("lname").value;
            var kazaa = document.getElementById("kazaa").value;
            var city = document.getElementById("city").value;
            var addr = document.getElementById("addr").value;
            var numb = document.getElementById("numb").value;

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // we load credit_card.php page instead of the image
                    document.getElementById("rightColumn").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "credit_card.php?fname="+fname+"&lname="+lname, true);
            xhttp.send();
        });

    </script>

</body>