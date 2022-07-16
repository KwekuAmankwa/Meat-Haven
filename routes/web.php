<?php

use App\Http\Controllers\HomeController;
use App\Models\category;
use Illuminate\Support\Facades\Route;
use App\Models\products;


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

Route::resource('products', products::class);

Route::resource('category', category::class);