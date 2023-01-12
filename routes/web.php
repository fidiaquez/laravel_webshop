<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexCatController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [LoginController::class,'index'])->name('login')  ;

Route::get('home', [HomeController::class,'index'])->name('home') ;

Route::get('home/{var}', [HomeController::class,'show'])->name('home.var')  ;

Route::get('Index', [IndexCatController::class,'index'])->name('catalog') ;

// Route::get('product/{Itemcode}/{color}/{action}/{size}', [ProductController::class,'index'])->name('product') ;

// Route::post('product', [ProductController::class,'store'])->name('product.store') ;

// Route::post('product.change', [ProductController::class,'change'])->name('product.change') ;

Route::resource('product',ProductController::class);
