<?php
    $db_user = "root";
    $db_pass = "";
    $db_name = "useraccounts";
    $db_host = "127.0.0.1";

    $dsn = "mysql:host=$db_host;dbname=$db_name";
    $db = new PDO($dsn, $db_user, $db_pass);

    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>