<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home.home', [
            'products' => Product::orderBy('id', 'DESC')->take(5)->get(),
        ]);
    }
    public function productDetails($id)
    {
        return view('front.product.details',[
            'product' => Product::find($id),
        ]);
    }
    public function categoryPage()
    {
        return view('front.product.category');
    }
}
