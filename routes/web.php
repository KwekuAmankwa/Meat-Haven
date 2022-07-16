<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
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


Route::get('/admin', [HomeController::class, 'admin'])->name('home.admin');

Route::get('/', [HomeController::class, 'main'])->name('home.index');

Route::resource('products', ProductsController::class);

Route::resource('category', CategoryController::class);