<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductHomeController;
use App\Http\Controllers\ProductCreateController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\ProductStatisticsController;
use App\Http\Controllers\WarehouseListController;
use App\Http\Controllers\WarehouseStatisticsController;
use App\Http\Controllers\ProductUserController;
use App\Http\Controllers\ProductTransferController;
use App\Http\Controllers\WarehouseCreateController;
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
    return redirect() -> route('signin.index');  
});

Route::get('/', function(){
    return view('sales.index');
});
