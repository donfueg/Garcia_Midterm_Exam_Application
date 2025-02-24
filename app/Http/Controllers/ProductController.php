<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ["name" => "iPhone 15 Pro", "description" => "Latest Apple flagship phone.", "price" => 1299, "image" => "https://via.placeholder.com/200", "category" => "Gadgets"],
            ["name" => "Samsung Galaxy S24", "description" => "High-performance Android device.", "price" => 1199, "image" => "https://via.placeholder.com/200", "category" => "Gadgets"],
            ["name" => "Attack on Titan Box Set", "description" => "Complete manga series.", "price" => 250, "image" => "https://via.placeholder.com/200", "category" => "Anime"],
            ["name" => "The Dark Knight", "description" => "Christopher Nolan's masterpiece.", "price" => 20, "image" => "https://via.placeholder.com/200", "category" => "Movies"],
            ["name" => "Sushi Delight", "description" => "Premium sushi platter.", "price" => 50, "image" => "https://via.placeholder.com/200", "category" => "Restaurants"]
        ];

        return view('products.index', compact('products'));
    }
}
