<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductHomeController;
use App\Http\Controllers\ProductCreateController;
use App\Http\Controllers\ProductListController;
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

Route::get('/', function () {
    return view('welcome');
});


// Product
Route::get('/product/home',[ProductHomeController::class, 'index'])->name('productHome.index');
Route::get('/product/create',[ProductCreateController::class, 'index'])->name('productCreate.index');
Route::get('/product/list',[ProductListController::class, 'index'])->name('productList.index');
Route::get('/product/list/faulty',[ProductListController::class, 'faulty'])->name('productListFaulty.index');