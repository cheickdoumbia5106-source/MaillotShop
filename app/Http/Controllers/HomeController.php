<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $popular = Product::inRandomOrder()->take(8)->get();
        $newest = Product::latest()->take(4)->get();
        $categories = ['Club', 'Sélection nationale'];

        return view('home', compact('popular', 'newest', 'categories'));
    }
}