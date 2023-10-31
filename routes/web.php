<?php

use App\Http\Controllers\product_types_controller;
use App\Http\Controllers\products_controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

// product_types
// index
Route::get('/product_type',[product_types_controller::class,'index'])->name('product_type');
// create
Route::get('/product_type_create',[product_types_controller::class,'create'])->name('product_type_create');
// store
Route::post('/product_type_store',[product_types_controller::class,'store'])->name('product_type_store');


// products
// index
Route::get('/product',[products_controller::class,'index'])->name('product');