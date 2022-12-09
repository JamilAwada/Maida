<?php
    session_start();

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $cart = $_SESSION['cart'];
        foreach($cart as $key => $value){
            if($value['id'] == $id){
                unset($cart[$key]);
                $_SESSION['cart'] = $cart;
                echo "deleted";
            }
        }
    }

    
?>