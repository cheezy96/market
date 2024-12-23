<?php

$dsn = "mysql:
        host=localhost;
        dbname=market;
        user=root;
        password=;
";
// UPDATE `products` SET `qty` = '49' WHERE `products`.`id` = 1;
$conn = new PDO($dsn);

$id = $_GET['id'];
$amount = $_GET['amount'];

$conn->query("UPDATE `products` SET `qty` = qty - '$amount' WHERE `products`.`id` = $id;");