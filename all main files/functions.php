<?php
// require mysql connection
require("./database/DBcontroller.php");

// require product class
require("./database/product.php");

//DBController object
$db=new DBcontroller();

//product object
$product=new product($db);

print_r($product->getData()); 