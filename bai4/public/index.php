<?php

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


$router->resolve();

// $cate = new CategoryModel;

// var_dump(CategoryModel::all());

// $cate->insert([
//     // 'cate_name' => 'Samsung',
//     'slug' => "samsung",
//     'desc' => "Điện thoại samsung"
// ]);
// $data = [
//     'slug' => "samsung-new",
//     'desc' => "Điện thoại samsung New"
// ];
// $cate->update("19 OR cate_name='blazer'", $data);

// $product = new ProductModel;
// $result = $product->where('cate_id', '=', 2)
//     ->andWhere('price', '>', 5)
//     ->orWhere('name', '=', 'Samsung galaxy ultra')
//     ->get();
// echo "<pre>";
// var_dump($result);
