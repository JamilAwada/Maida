<?php
    $db_user = "root";
    $db_pass = "";
    $db_name = "useraccounts";
    $db_host = "127.0.0.1";

    // use PDO
    $dsn = "mysql:host=$db_host;dbname=$db_name";
    $db = new PDO($dsn, $db_user, $db_pass);

    // set attributes
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // use mysqli
    // $db = new mysqli($db_host, $db_user, $db_pass, $db_name);
    
    // if($db->connect_error){
    //     die("Connection failed: " . $db->connect_error);
    // }


?>