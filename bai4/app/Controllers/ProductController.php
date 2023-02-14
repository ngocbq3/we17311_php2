<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductModel::all();
        return $this->view('admin/products/list', ['products' => $products]);
    }

    public function create()
    {
        $categories = CategoryModel::all();
        return $this->view('admin/products/add', ['categories' => $categories]);
    }

    /**
     * function store: Thêm dữ liệu vào database
     * @request: nhận dữ liệu từ form
     */
    public function store(Request $request)
    {
        $p = $request->getBody();
        $image = $_FILES['image']['name'];

        //Upload file image
        move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $image);
        //Add image vào mảng $p
        $p['image'] = $image;

        //Insert
        $product = new ProductModel();
        $product->insert($p);
        header("location:/product");
        exit;
    }
}
