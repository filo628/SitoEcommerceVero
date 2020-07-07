<?php

//require msqli connection
require('database/DBController.php');

//require Product Class
require('database/Product.php');


//require Cart Class
require('database/Cart.php');


//DBController object
$db = new DBController ();

//product object
$product = new Product($db);
$product_shuffle = $product->getData();



// Cart Object
$Cart = new Cart($db);
