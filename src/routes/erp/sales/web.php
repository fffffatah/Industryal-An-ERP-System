<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes (Sales and Marketing Features)
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/sales', function () {
    return view('sales.index');
});

Route::get('/sales/profile', function(){
    return view('sales.profile.index');
});

Route::get('/sales/statistics', function(){
    return view('sales.stats.index');
});

Route::get('/sales/dashboard', function(){
    return view('sales.dashboard.index');
});

Route::get('/sales/dashboard', [
    'uses' => 'SalesController@dashboardIndex',
    'as' => 'sales.dashboard.index'
]);

Route::get('/sales/customers/list', function(){
    return view('sales.customers.list');
});
