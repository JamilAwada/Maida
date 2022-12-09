<?php
    require_once('config.php');
    session_start();
?>


<?php
    
    if(isset($_POST)){
        // get dish image, name, price, request, quantity from post method
        $id = $_POST['id'];
        $name = $_POST['name'];
        $quantity = $_POST['quantity'];
        $request = $_POST['request'];
        $image = $_POST['image'];
        $price = $_POST['price'];

        if($quantity == ""){
            $quantity = 1;
        }

        if($request == ""){
            $request = "No specific request";
        }

        // add the dish with the details above to the cart array in the session variable
        if(isset($_SESSION['cart'])){
            $cart = $_SESSION['cart'];
            $item_array_id = array_column($cart, 'id');
            if(in_array($id, $item_array_id)){
                echo "Dish already added to cart";
            }else{
                $count = count($cart);
                $item_array = array(
                    'id' => $id,
                    'name' => $name,
                    'quantity' => $quantity,
                    'request' => $request,
                    'total' => $total,
                    'image' => $image,
                    'price'=> $price
                );
                $cart[$count] = $item_array;
                $_SESSION['cart'] = $cart;
                echo "Dish added to cart";
            }
        }else{
            $item_array = array(
                'id' => $id,
                'name' => $name,
                'quantity' => $quantity,
                'request' => $request,
                'total' => $total,
                'image' => $image,
                'price'=> $price,
            );
            $cart[0] = $item_array;
            $_SESSION['cart'] = $cart;
            echo "Dish added to cart";
        }

    }
?>