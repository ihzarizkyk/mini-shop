<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController as Product;
use App\Http\Controllers\HomeController as Home;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[Home::class,"index"]);

Route::get("/products",[Product::class,"product"]);
Route::get("/products/{slug}",[Product::class,"detailProduct"]);