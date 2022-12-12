<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maida - Credit Card </title>
</head>

<body>
    <?php
    require_once("config.php");
    session_start();
    $user_id = (int)$_SESSION['id'];

    $numb = $_GET['numb'];
    $addr = $_GET['addr'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $district = $_GET['district'];
    $city = $_GET['city'];


    $sql = "UPDATE users SET address = :addr, phone = :numb, city = :city, district = :district WHERE id = :user_id";
    $stmt = $db->prepare($sql);
    $stmt->execute(['addr' => $addr, 'numb' => $numb, 'city' => $city, 'district' => $district, 'user_id' => $user_id]);
    ?>
    <form action="process_checkout.php" method="POST">
        <div class="pay">

            <div class="rect">
                <div style="width: 100%;height:30px;">
                    <div style="position:relative; float:left;left:30px;top:15px;font-size:20px; font-family:DD-TTNorms, -apple-system, BlinkMacSystemFont, ' Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji' , 'Segoe UI Emoji' , 'Segoe UI Symbol' ;">
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
                    <input type="text" pattern="[0-9]{16}" id="ccnum" name="cardnumber" placeholder="1111222233334444" style="width:300px;padding:5px;border-radius:10px;text-align:center;border:2px solid white;" required><br>
                    <label for="expyear" required>Exp Date</label><br>
                    <input type="month" id="expyear" name="expyear" style="width:150px;padding:5px;border-radius:10px;border:2px solid white;" required><br>
                    <label for="cvv">CVV</label><br>
                    <input type="number" pattern="[0-9]{3}" id="cvv" name="cvv" placeholder="352" style="width:60px;padding:5px;border-radius:10px;text-align:center;border:2px solid white;" required>
                </div>
            </div>
            <div class="checkout">
                <button class="btn" type="submit" name="checkout" style="color:white; font-weight:bold;margin-top:10px;width: 100%;height: 50px;border-radius: 10px;background-color: orangered;cursor: pointer;">Checkout</button>
            </div>
        </div>
    </form>



</body>

</html>