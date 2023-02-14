<?php

namespace App\Controllers;

use App\Models\ProductModel;

class SiteController extends Controller
{
    public function index()
    {
        $products = ProductModel::all();
        $this->view('home', ['products' => $products]);
    }
    public function about()
    {
        $person = [
            'name' => 'ngocbq',
            'email' => 'ngocbq3@fe.edu.vn'
        ];
        $this->view('about', ['person' => $person]);
    }
}
