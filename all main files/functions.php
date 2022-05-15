<?php
// require mysql connection
require("./database/DBcontroller.php");

// require product class
require("./database/product.php");

//require product cart class
require("./database/cart.php");

//DBController object
$db=new DBcontroller();

//product object
$product=new product($db);

//cart object
$Cart=new Cart($db);
