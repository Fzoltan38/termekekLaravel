<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
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


Auth::routes();



Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('welcome');
Route::get('/home', [App\Http\Controllers\ProductController::class, 'index'])->name('home');
Route::get('/w/show/{id}', [ProductController::class,'show']);


//MainFunction  Home / Products  / about us   / contactus   / services
Route::get('/admin', [ProductController::class, 'admin'])->middleware(['auth', 'admin']);






Route::middleware('auth')->group(
    function()
    {

 Route::get('/pn', [ProductController::class, 'product_name'])->name('ecommerce-products');
 Route::get('/pd', [ProductController::class, 'product_description'])->name('ecommerce-products');
 Route::get('/pp', [ProductController::class, 'product_price'])->name('ecommerce-products');
 Route::get('/pu', [ProductController::class, 'product_number'])->name('ecommerce-products');
 Route::get('/pb', [ProductController::class, 'product_brand'])->name('ecommerce-products');
 Route::get('/pc', [ProductController::class, 'product_category'])->name('ecommerce-products');
 Route::get('/ecommerce-products/sh', [ProductController::class,'search'])->name('result_search');

});

// group by routes (now public)
Route::get('/groub-by-pp', [ProductController::class, 'grobpby_product_price'])->name('ecommerce-products');
Route::get('/groub-by-pb', [ProductController::class, 'grobpby_product_brand'])->name('ecommerce-products');
Route::get('/groub-by-pc', [ProductController::class, 'grobpby_product_category'])->name('ecommerce-products');


// search page
Route::get('/show_details/{id}', [ProductController::class, 'show_details'])->name('show_details');
Route::get('/file-details', [FileController::class, 'index']);


// Product management: create/edit/update csak bejelentkezett usernek (customer + admin)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/newproduct', [ProductController::class, 'create'])->name('newproduct');
    Route::post('/newproduct/store', [ProductController::class, 'store'])->name('newproduct.store');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::post('/products/update-description/{id}', [ProductController::class, 'updateDescription'])
        ->name('products.updateDescription');
});


Route::view('/contact-us', 'contact-us');

Route::post('/contact-us', function () {
    return back()->with('success', 'Your message will come soon.');
});
Route::view('/about-us', 'about-us');

// User CRUD (admin only)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});
