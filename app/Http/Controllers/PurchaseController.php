<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PurchaseController extends Controller
{
    public function store($id_user, $id_product)
    {
        $request->validate([
            'user_id' => 'required|max:255',
            'product_id' => 'required|max:255',
        ]);

        Product::create([
			'user_id' => $id_user,
			'product_id' => $id_product,
		]);

        return redirect()->route('products.ecommerce')
            ->with('success', 'Product created successfully.');
    }

	public function show()
    {
        $products = Product::all();
		
        return view('products.display', compact('products'));
    }
}
