<?php

$dsn = "mysql:
        host=localhost;
        dbname=market;
        user=root;
        password=;
";
// INSERT INTO `orders` (`id`, `name`, `number`, `amount`, `total`) VALUES (NULL, 'baron', '0909090909', '234', '234');
$conn = new PDO($dsn);

$name = $_GET['name'];
$number = $_GET['number'];
$amount = $_GET['amount'];
$total = $_GET['total'];

$conn->query("INSERT INTO `orders` (`id`, `name`, `number`, `amount`, `total`) VALUES (NULL, '$name', '$number', '$amount', '$total');");
