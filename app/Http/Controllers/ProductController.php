<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_index()
    {
        $products = Product::all();
        return view('products.ecommerce', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'unitary_cost' => 'required|numeric|min:0.01',
			'img_name' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

		// Obtener el archivo de imagen del formulario
		$image = $request->file('img_name');

		// Generar un nombre único para la imagen
		$imageName = time() . '_' . $image->getClientOriginalName();
	
		// Almacenar la imagen en la carpeta 'public/img/products' con el nombre único
		$imagePath = $image->storeAs('public/img/products', $imageName);

        Product::create([
			'name' => $request->input('name'),
			'unitary_cost' => $request->input('unitary_cost'),
			'img_name' => $imageName,
		]);

        return redirect()->route('products.ecommerce')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'unitary_cost' => 'required|numeric|min:0.01',
			'img_name' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

		// Obtener el archivo de imagen del formulario
		$image = $request->file('img_name');

		// Generar un nombre único para la imagen
		$imageName = time() . '_' . $image->getClientOriginalName();
	
		// Almacenar la imagen en la carpeta 'public/img/posts' con el nombre único
		$imagePath = $image->storeAs('public/img/products', $imageName);

        $product = Product::find($id);
        $product -> update([
			'name' => $request->input('name'),
			'unitary_cost' => $request->input('unitary_cost'),
			'img_name' => $imageName,
		]);

        return redirect()->route('products.ecommerce')
            ->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products.ecommerce')
            ->with('success', 'Post deleted successfully');
    }

    // routes functions
    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }


    /**
     * Display the specified resource.

     */
    public function show()
    {
        $products = Product::all();
		
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }
}
