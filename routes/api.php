<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController as ProductAPI;
use App\Http\Controllers\API\CheckoutController as CheckoutAPI;
use App\Http\Controllers\API\TransactionController as TransactionAPI;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products',[ProductAPI::class, 'all']);
Route::post('/checkout',[CheckoutAPI::class, 'checkout']);
Route::get('/transactions/{id}',[TransactionAPI::class, 'get']);

