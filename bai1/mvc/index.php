<?php
require_once "models/database.php";
require_once "controllers/productController.php";

$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : '';

switch ($ctr) {
    case '':
    case 'home':
        include_once "views/home.php";
        break;
    case 'contact':
        include_once "views/contact.php";
        break;
    case 'about':
        include_once "views/about.php";
        break;
    case 'product':
        productAll();
        break;
    default:
        include_once "views/404.php";
        break;
}
