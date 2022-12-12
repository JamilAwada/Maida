<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maida - Processing Checkout</title>
</head>
<body>
<?php
    session_start();
    require_once("config.php");
?>

<?php
    
    $customerid = (int)$_SESSION['id'];

    $cart = $_SESSION['cart'];


    foreach($cart as $key => $value){
        
        $dishid = (int)$value['id'];
        $dishname = $value['name'];
        $quantity = (int)$value['quantity'];
        $request = $value['request'];
        $image = $value['image'];
        $price = (int)$value['price'];
        $chefname = $value['chefname'];
        $dishname = $value['name'];



        $sql = "INSERT INTO orders (customerid, chefname, dishid, quantity, request, status, price, image, dishname) VALUES (:customerid, :chefname, :dishid, :quantity, :request, :status, :price, :image, :dishname)";
        $stmt = $db->prepare($sql);
        
        $stmt->execute(['customerid' => $customerid, 'chefname' => $chefname, 'dishid' => $dishid, 'quantity' => $quantity, 'request' => $request, 'price' => $price, 'image' => $image, 'dishname' => $dishname, 'status' => "Pending"]);
        
    }
    $_SESSION['cart'] = array();

    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Order placed successfully',
        showConfirmButton: false,
        timer: 1500
    }).then(function() {
        window.location = 'ordertracking.php';
    });
    </script>";

?>

</body>
</html>