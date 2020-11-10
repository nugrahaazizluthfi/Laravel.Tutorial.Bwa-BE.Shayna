<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController as Dashboard;
use App\Http\Controllers\ProductController as Product;
use App\Http\Controllers\ProductGalleryController as Gallery;

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

Route::get('/', [Dashboard::class, 'index'])->name('dashboard');

Auth::routes(['register' => false]);


Route::resource('products', Product::class);
Route::resource('product_galleries', Gallery::class);
