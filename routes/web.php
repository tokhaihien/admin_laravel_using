<?php

use App\Http\Controllers\accounts_contronller;
use App\Http\Controllers\e_detail_invoices_controller;
use App\Http\Controllers\i_detail_invoices_controller;
use App\Http\Controllers\i_invoices_controller;
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

Route::middleware('auth')->group(function(){
    // trang chu
    Route::get('/', function () {return view('index');})->name('idx');
    // dang xuat      
    Route::get('/logout',[accounts_contronller::class, 'logout'])->name('logout');

    // product_types
    Route::prefix('product_type')->group(function(){
        // index
        Route::get('/', [product_types_controller::class, 'index'])->name('product_type');
        // store
        Route::post('store', [product_types_controller::class, 'store'])->name('product_type_store');
        // edit
        Route::get('{id?}/edit', [product_types_controller::class, 'show'])->name('product_type_show');
        Route::post('{id?}/edit', [product_types_controller::class, 'edit'])->name('product_type_edit');
        // del
        Route::get('{id?}/del', [product_types_controller::class, 'destroy'])->name('product_type_del');
    });
    
    // products
    // index
    Route::get('/product', [products_controller::class, 'index'])->name('product');
    // store
    Route::post('/product_store', [products_controller::class, 'store'])->name('product_store');
    // del
    Route::get('/product/{id?}/del', [products_controller::class, 'destroy'])->name('product_del');
    // edit
    Route::get('/product/{id?}/edit', [products_controller::class, 'show'])->name('product_show');
    Route::post('/product/{id?}/edit', [products_controller::class, 'edit'])->name('product_edit');

    // i_product - nhap hang
    // index
    Route::get('/i_product', [i_detail_invoices_controller::class, 'index'])->name('i_product');
    Route::post('/i_product', [i_detail_invoices_controller::class, 'store'])->name('do_i_product');

    // i_invoices - hoa don nhap
    // index
    Route::get('/i_invoices', [i_invoices_controller::class, 'index'])->name('i_invoices');
    Route::get('/i_detail_invoice/{id?}', [i_detail_invoices_controller::class, 'show'])->name('i_detail_invoice');

    // e_product - xuat hang
    // index
    Route::get('/e_product', [e_detail_invoices_controller::class, 'index'])->name('e_product');
    Route::post('/e_product', [e_detail_invoices_controller::class, 'store'])->name('do_e_product');
});

Route::middleware('guest')->group(function () {
    Route::name('login.')->group(function(){
        Route::get('/login', [accounts_contronller::class, 'index'])->name('login');
        Route::post('/login', [accounts_contronller::class, 'login'])->name('do_login');
    });
});

// Route::get('/', function () {
//     return view('index');
// })->name('idx')->middleware('auth');

// login
// Route::get('/login',[accounts_contronller::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login', [accounts_contronller::class, 'login'])->name('do_login');
// logout
// Route::get('/logout',[accounts_contronller::class, 'logout'])->name('logout');

// // product_types
// // index
// Route::get('/product_type',[product_types_controller::class,'index'])->name('product_type');
// // store
// Route::post('/product_type_store',[product_types_controller::class,'store'])->name('product_type_store');
// // edit
// Route::get('/product_type/{id?}/edit',[product_types_controller::class,'show'])->name('product_type_show');
// Route::post('/product_type/{id?}/edit',[product_types_controller::class,'edit'])->name('product_type_edit');
// // del
// Route::get('/product_type/{id?}/del',[product_types_controller::class,'destroy'])->name('product_type_del');

// // products
// // index
// Route::get('/product',[products_controller::class,'index'])->name('product');
// // store
// Route::post('/product_store',[products_controller::class,'store'])->name('product_store');
// // del
// Route::get('/product/{id?}/del',[products_controller::class,'destroy'])->name('product_del');
// // edit
// Route::get('/product/{id?}/edit',[products_controller::class,'show'])->name('product_show');
// Route::post('/product/{id?}/edit',[products_controller::class,'edit'])->name('product_edit');

// // i_product
// // index
// Route::get('/i_product', [i_detail_invoices_controller::class, 'index'])->name('i_product');
// Route::post('/i_product', [i_detail_invoices_controller::class, 'store'])->name('do_i_product');

// // i_invoices
// // index
// Route::get('/i_invoices', [i_invoices_controller::class, 'index'])->name('i_invoices');
// Route::get('/i_detail_invoice/{id?}', [i_detail_invoices_controller::class, 'show'])->name('i_detail_invoice');