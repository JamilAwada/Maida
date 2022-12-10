<?php 
    require_once('config.php');



    $order_id = $_GET['id'];

    // update the status of order with order_id from the database to be Fulfilled
    // use pdo
    $sql = "UPDATE orders SET status = 'Fulfilled' WHERE id = :order_id";
    $stmt = $db->prepare($sql);
    $stmt->execute(['order_id' => $order_id]);

    // redirect to incoming_orders.php
    header('Location: incoming_orders.php');
    
?>