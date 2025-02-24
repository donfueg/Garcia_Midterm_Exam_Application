<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ["name" => "Product 1", "description" => "Description 1", "price" => 100],
            ["name" => "Product 2", "description" => "Description 2", "price" => 200],
            ["name" => "Product 3", "description" => "Description 3", "price" => 300]
        ];

        return view('products.index', compact('products'));
    }
}
