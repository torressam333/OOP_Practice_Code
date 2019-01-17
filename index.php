<?php

spl_autoload_register(function($className){
    include 'src/' .$className . '.php';
});

header('Content-Type:text/plain', true);

$pdo = (new PDOClient('mysql', 'localhost', 'store', 'root', 'root'))->connect();

$products = $pdo->select('SELECT * FROM products')->get();

$handler = $mysqli->getConnction();

$p = $handler->query("SELECT * FROM products where id  > 6")->fetch();

var_dump($p);
foreach ($products as $product){
    var_dump($products->name);
}