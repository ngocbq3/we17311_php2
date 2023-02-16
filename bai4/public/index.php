<?php

use App\Controllers\ProductController;
use App\Controllers\SiteController;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Router;

require_once __DIR__ . "/../vendor/autoload.php";

$router = new Router;

Router::get('/', function () {
    echo "Hello World";
});
Router::get('/contact', function () {
    echo "CONTACT PAGE";
});

Router::get('/site', [SiteController::class, 'index']);
Router::get('/about', [SiteController::class, 'about']);
Router::get('/contact', [SiteController::class, 'contact']);
Router::post('/contact', [SiteController::class, 'contactHandle']);
Router::get('/product', [ProductController::class, 'index']);
Router::get('/create-product', [ProductController::class, 'create']);
Router::post('/create-product', [ProductController::class, 'store']);
Router::get('/update-product', [ProductController::class, 'show']);
Router::post('/update-product', [ProductController::class, 'update']);

$router->resolve();
