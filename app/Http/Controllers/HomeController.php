<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index(){
        $products = Product::limit(3)->get();
        $galleries = Gallery::limit(4)->get();
        return view('pages.home', compact('products', 'galleries'));
    }
}
