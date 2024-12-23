<?php

$dsn = "mysql:
        host=localhost;
        dbname=market;
        user=root;
        password=;
";
// INSERT INTO `orders` (`id`, `name`, `number`, `amount`, `total`) VALUES (NULL, 'baron', '0909090909', '234', '234');
$conn = new PDO($dsn);

$results = $conn->query("SELECT * FROM `products`")->fetchAll();

header("Content-type: json");
echo json_encode($results);