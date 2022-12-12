<?php
    require_once('config.php');
    session_start();
?>


<?php
    
    if(isset($_POST)){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $quantity = $_POST['quantity'];
        $request = $_POST['request'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $chefname = $_POST['chefname'];

        if($quantity == ""){
            $quantity = 1;
        }

        if($request == ""){
            $request = "No specific request";
        }

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
                    'image' => $image,
                    'price'=> $price,
                    'chefname' => $chefname,

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
                'image' => $image,
                'price'=> $price,
                'chefname' => $chefname,
            );
            $cart[0] = $item_array;
            $_SESSION['cart'] = $cart;
            echo "Dish added to cart";
        }

    }
?>