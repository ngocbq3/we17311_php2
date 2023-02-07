<?php

use App\Models\CategoryModel;

require_once __DIR__ . "/../vendor/autoload.php";

$cate = new CategoryModel;

// var_dump(CategoryModel::all());

// $cate->insert([
//     // 'cate_name' => 'Samsung',
//     'slug' => "samsung",
//     'desc' => "Điện thoại samsung"
// ]);
$data = [
    'slug' => "samsung-new",
    'desc' => "Điện thoại samsung New"
];
$cate->update("19 OR cate_name='blazer'", $data);
