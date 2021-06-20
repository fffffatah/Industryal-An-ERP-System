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
    return view('sales.profile.details.index');
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

Route::get('/sales/profile/', [
    'uses' => 'SalesProfileController@profileIndex',
    'as' => 'sales.profile.details.index'
]);

Route::get('/sales/profile/edit', [
    'uses' => 'SalesProfileController@editProfile',
    'as' => 'sales.profile.edit'
]);

Route::get('/sales/profile/change/password', [
    'uses' => 'SalesProfileController@updatePassword',
    'as' => 'sales.profile.edit.password'
]);

Route::get('/sales/customers/', [
    'uses' => 'SalesCustomerController@showCustomersList',
    'as' => 'sales.customers.list'
]);

Route::get('/sales/customers/email', [
    'uses' => 'SalesCustomerController@sendEmail',
    'as' => 'sales.customers.send'
]);

Route::get('/sales/customers/list', function(){
    return view('sales.customers.list');
});

// Route::get(
//     '/sales/profile',
//     [SalesProfileController::class, 'profileIndex']
// )->name('sales.profile.details.index');