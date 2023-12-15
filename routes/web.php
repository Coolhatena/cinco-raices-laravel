<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ecommerceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
 
});

Route::get('/prueba', function () {
    echo"Esto es una simple prueba!!";
});

Route::get('colaboradores/{nombre}', function($nombre){
	return "Mostrando el colaborador $nombre";
});

Route::get('vista', function () {
	return view('ejemplo');
});

Route::get('vista/{enero},{anio},{evento}', function ($mes,$anio,$eventos) {
	return view('ejemplo', [
		'mes' => $mes,
    	'ano' => $anio,
    	'eventos' => $eventos]);
		
	}); 
	
	Route::get('articulos', function(){
		dd(\App\Articulos::all());
	});*/
	
// returns the home page with all posts
Route::get('/', PostController::class .'@index')->name('posts.index');

// ROUTES FOR POSTS MANIPULATION
// returns the form for adding a post
Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
// adds a post to the database
Route::post('/posts', PostController::class .'@store')->name('posts.store');
// returns a page that shows a full post
Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');
// returns the form for editing a post
Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');
// updates a post
Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');
// deletes a post
Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');

// Shows the store and all the products
Route::get('/tienda', ProductController::class . '@store_index')->name('products.ecommerce');
// ROUTES FOR POSTS MANIPULATION
Route::get('/products/create', ProductController::class . '@create')->name('products.create');
// adds a post to the database
Route::post('/products', ProductController::class .'@store')->name('products.store');
// returns a page that shows a full post
Route::get('/products/list', PurchaseController::class .'@show')->name('products.show');
// returns the form for editing a post
Route::get('/products/{product}/edit', ProductController::class .'@edit')->name('products.edit');
// updates a post
Route::put('/products/{product}', ProductController::class .'@update')->name('products.update');
// deletes a post
Route::delete('/products/{product}', ProductController::class .'@destroy')->name('products.destroy');

// Extra routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
