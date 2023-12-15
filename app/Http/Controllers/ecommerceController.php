<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ecommerceController extends Controller
{
    public function store_index()
    {
        $products = Product::all();
        return view('products.ecommerce', compact('products'));
    }
}
