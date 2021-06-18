<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductHomeController;
use App\Http\Controllers\ProductCreateController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\ProductStatisticsController;
use App\Http\Controllers\WarehouseListController;
use App\Http\Controllers\WarehouseStatisticsController;
use App\Http\Controllers\ProductOtherActivitiesController;
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


                                    // Products
//Product
Route::get('/product/home',[ProductHomeController::class, 'index'])->name('productHome.index');
Route::get('/product/create',[ProductCreateController::class, 'index'])->name('productCreate.index');
Route::get('/product/list',[ProductListController::class, 'index'])->name('productList.index');
Route::get('/product/list/faulty',[ProductListController::class, 'faulty'])->name('productListFaulty.index');
Route::get('/product/stocks',[ProductStockController::class, 'index'])->name('productStocks.index');
Route::get('/product/statistics',[ProductStatisticsController::class, 'index'])->name('productStatistics.index');

//Warehouse
Route::get('/warehouse/list',[WarehouseListController::class, 'index'])->name('warehouseList.index');
Route::get('/warehouse/statistics',[WarehouseStatisticsController::class, 'index'])->name('warehouseStatistics.index');

//Others
Route::get('/user/activities',[ProductOtherActivitiesController::class, 'index'])->name('userActivities.index');