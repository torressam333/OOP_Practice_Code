<?php

spl_autoload_register(function ($className) {
    include 'src/'.$className.'.php';
});

header('Content-Type:text/plain', true);

$bill = new Dog();
$mrMeow = new Lion();
$peter = new Rabbit();

$bill->chase($peter);
$bill->hunt($peter);

$mrMeow->chase($bill);
$mrMeow->hunt($bill);

$peter->chasedBy($bill);
$peter->huntedBy($bill);

//Older Code
/* header('Content-Type:text/plain', true);

$pdo = (new PDOClient('mysql', 'localhost', 'store', 'root', 'root'))->connect();

$products = $pdo->select('SELECT * FROM products')->get();

$handler = $mysqli->getConnction();

$p = $handler->query("SELECT * FROM products where id  > 6")->fetch();

var_dump($p);
foreach ($products as $product){
    var_dump($products->name);
} */
