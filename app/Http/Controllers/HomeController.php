<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->inRandomOrder()->limit(3)->get();
        $categories = Category::all(); // Fetch all categories from the database
        return view('home.index', compact('products', 'categories')); // Ensure you have the correct view file
    }

}
