<?php

require_once './Order.php';


$book1 = new Book();
$book1->setPrice(12.50);
$book2 = new Book();
$book2->setPrice(13.50);
$pencil = new Pencil();
$pencil->setPrice(11.00);

$order = new Order();
$order->addBook($book1);
$order->addBook($book2);
$order->addPencil($pencil);


echo "Total : {$order->getTotal()} money units";
