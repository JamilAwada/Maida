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
        <div class="container-fluid">
            <div class="row">
                <div class="col col-md-6 col-12">
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
                            <button class="bcart" id="subb" onclick="window.location.href='shipping.php';">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 col-12">
                    <img width="400px" src="images/address.png" alt="hooman">
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="pay">
        <input type="radio" id="cod" name="cod">
        <label for="cod">Cash On Delivery</label>
        <input type="radio" id="card" name="card">
        <label for="cod">Credit Card</label>
        <div class="rect">
            <div style="width: 100%;height:30px;">
                <div style="position:relative; float:left;left:30px;top:15px;font-size:20px; font-family:DD-TTNorms, -apple-system, BlinkMacSystemFont, " Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji" , "Segoe UI Emoji" , "Segoe UI Symbol" ;">
                    Card Details
                </div>
                <div style="position:relative;float:right;top: 5px;right:30px;">
                    <img src="images/visa.png" alt="visaicon" style="width:50px;height:50px;">
                    <img src="images/mastercard.png" alt="mastercardicon" style="margin-left:15px;width:50px;height:50px;">

                </div>
            </div>
            <br>
            <div style="margin-left: 30px; margin-top:5px">
                <label for="ccnum">Credit card number</label><br>
                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" style="width:300px;padding:5px;border-radius:10px;text-align:center;border:2px solid white;"><br>
                <label for="expyear">Exp Date</label><br>
                <input type="month" id="expyear" name="expyear" style="width:150px;padding:5px;border-radius:10px;border:2px solid white;"><br>
                <label for="cvv">CVV</label><br>
                <input type="text" id="cvv" name="cvv" placeholder="352" style="width:60px;padding:5px;border-radius:10px;text-align:center;border:2px solid white;">
                <br><br>
            </div>
        </div>
    </div>

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
</body>