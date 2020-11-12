<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController as Dashboard;
use App\Http\Controllers\ProductController as Product;
use App\Http\Controllers\ProductGalleryController as Gallery;
use App\Http\Controllers\TransactionController as Transaction;

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

Route::get('/products/{id}/gallery',[Product::class,'gallery'])
->name('products.gallery');
Route::resource('products', Product::class);
Route::resource('product_galleries', Gallery::class);

Route::get('/transactions/{id}/set-status',[Transaction::class,'setStatus'])
->name('transactions.status');
Route::resource('transactions', Transaction::class);
