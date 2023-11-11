<?php

use App\Http\Controllers\api_account_controller;
use App\Http\Controllers\api_product_types_controller;
use App\Http\Controllers\api_products_controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// product_types
Route::get('/product_type', [api_product_types_controller::class, 'index']);

// products
// product detail
Route::get('/product/{id?}',[api_products_controller::class, 'show']);

// acc
Route::post('/login',[api_account_controller::class, 'Login'])->middleware('');
