<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maida - Credit Card </title>
</head>

<body>
    <form action="process_checkout.php" method="POST">
        <div class="pay">
            <div class="top" style="margin: auto;margin-left:90px;color:orangered;font-weight:bold;font-size:15px; font-family:DD-TTNorms, -apple-system, BlinkMacSystemFont, " Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji" , "Segoe UI Emoji" , "Segoe UI Symbol" ;">
                <input type="radio" id="cod" name="cod">
                <label for="cod">Cash On Delivery</label>
                <input type="radio" id="card" name="card">
                <label for="cod">Credit Card</label>
            </div>
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
                    <input type="number" max="999" id="cvv" name="cvv" placeholder="352" style="width:60px;padding:5px;border-radius:10px;text-align:center;border:2px solid white;">

                </div>
            </div>

        </div>
        <!-- add a button to go to checkout -->
        <div class="checkout">
            <button class="btn" type="submit" name="checkout" style="color:white; font-weight:bold;margin-top:10px;width: 100%;height: 50px;border-radius: 10px;background-color: orangered;cursor: pointer;">Checkout</button>
        </div>
    </form>

    <!-- We get the address and the rest of the information from this page and send it to the chef while redirecting to the order tracking page -->
</body>

</html>