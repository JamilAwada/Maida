<?php 
    require_once('config.php');



    $order_id = $_GET['id'];


    $sql = "UPDATE orders SET status = 'Fulfilled' WHERE id = :order_id";
    $stmt = $db->prepare($sql);
    $stmt->execute(['order_id' => $order_id]);

    header('Location: incoming_orders.php');
    
?>