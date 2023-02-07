<?php

use App\Models\CategoryModel;
use App\Models\ProductModel;

require_once __DIR__ . "/../vendor/autoload.php";

$cate = new CategoryModel;

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

$product = new ProductModel;
$result = $product->where('cate_id', '=', 2)
    ->andWhere('price', '>', 5)
    ->orWhere('name', '=', 'Samsung galaxy ultra')
    ->get();
echo "<pre>";
var_dump($result);
