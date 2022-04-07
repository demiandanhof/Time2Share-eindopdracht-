<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function(){
    Route::get("/profile/{id}", 'App\Http\Controllers\UserController@products');
    Route::get("/ownprofile", 'App\Http\Controllers\UserController@ownProfile');
    Route::get("/ownprofile/changeprofilepic", 'App\Http\Controllers\UserController@changeProfilePic');
    Route::post("/create/review", 'App\Http\Controllers\UserController@storeReview');
    Route::post("/store/profilepic", 'App\Http\Controllers\UserController@storeProfilePic');
    
    Route::get("/admin", 'App\Http\Controllers\UserController@admin');
    Route::get("/delete/product/{id}", 'App\Http\Controllers\ProductController@deleteProduct');
    Route::get("/delete/user/{id}", 'App\Http\Controllers\UserController@deleteUser');

    Route::get("/product/{id}", 'App\Http\Controllers\ProductController@show');
    Route::get("/product/{id}/borrow", 'App\Http\Controllers\ProductController@borrow');
    Route::get("/product/{id}/return", 'App\Http\Controllers\ProductController@return_product');
    Route::get("/profile/product/{id}/return", 'App\Http\Controllers\ProductController@return_product');
    
    Route::get("profile/product/{id}", 'App\Http\Controllers\ProductController@show');
    Route::get("profile/product/{id}/borrow", 'App\Http\Controllers\ProductController@borrow');
    Route::get("profile/product/{id}/return", 'App\Http\Controllers\ProductController@return_product');

    Route::get("/create", 'App\Http\Controllers\ProductController@create');
    Route::post("/store/product", 'App\Http\Controllers\ProductController@store');
    Route::get("/", 'App\Http\Controllers\UserController@home');

});

Route::get('/uitgelogd', '\App\Http\Controllers\UserController@uitloggen');

Route::get("/welcome", function(){
    $all_products = \App\Models\Product::all();
    return view('welcome')->with('all_products', $all_products);;
});
