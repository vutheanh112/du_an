<?php
session_start();
ob_start();
require 'lib/template.php';
require 'db/config.php';
require 'db/database.php';
require 'lib/product.php';
require 'lib/format.php';
require 'lib/url.php';
require 'lib/data.php';
require 'lib/pagding.php';
require 'lib/user.php';
require 'lib/cart.php';
require 'lib/login.php';




db_connect($db);
$mod = !empty ($_GET['mod']) ?$_GET['mod'] : 'home';
$act = !empty ($_GET['act']) ?$_GET['act'] : 'main';
$page = "module/{$mod}/{$act}.php";
if(file_exists($page)){
    require $page;
    
}else{
    require('inc/404.php');
}






