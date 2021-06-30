<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesStatsController;
use App\Http\Controllers\SalesCustomerController;
use App\Http\Controllers\SalesProfileController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SalesMailController;
use App\Http\Controllers\SalesOrderController;

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
// Route::get('/sales', function () {
//     return view('sales.index');
// });
Route::get('/sales',[SalesController::class, 'dashboardIndex'])->name('sales.dashboard');



Route::get('/sales/dashboard',[SalesController::class, 'dashboardIndex'])->name('sales.dashboard.index');

//User Profile
Route::get('/sales/profile/',[SalesProfileController::class, 'profileIndex'])->name('sales.profile.details.index');
Route::get('/sales/profile/edit',[SalesProfileController::class, 'editProfile'])->name('sales.profile.edit');
Route::get('/sales/profile/change/password',[SalesProfileController::class, 'updatePassword'])->name('sales.profile.edit.password');

//Customers
Route::get('/sales/customers/',[SalesCustomerController::class, 'showCustomersList'])->name('sales.customers.list');
Route::get('/sales/customers/update/{id}',[SalesCustomerController::class, 'editCustomer'])->name('sales.customers.update');
Route::post('/sales/customers/update/{id}',[SalesCustomerController::class, 'updateCustomer']);

//Orders
Route::get('/sales/orders/',[SalesOrderController::class, 'ordersList'])->name('sales.orders.list');
Route::get('/sales/orders/create',[SalesOrderController::class, 'showCustomersList'])->name('sales.orders.create');
Route::get('/sales/orders/list',[SalesOrderController::class, 'ordersList'])->name('sales.orders.list');
Route::get('/sales/orders/transactions',[SalesOrderController::class, 'ordersList'])->name('orders.transactions');


//Customer Mails
Route::get('/sales/mail/send',[SalesMailController::class, 'sendEmail'])->name('sales.mail.send');
Route::get('/sales/mail/all',[SalesMailController::class, 'allMail'])->name('sales.mail.all');
Route::get('/sales/mail/sent',[SalesMailController::class, 'sentMail'])->name('sales.mail.sent');
Route::get('/sales/mail/received',[SalesMailController::class, 'receivedMail'])->name('sales.mail.received');
Route::get('/sales/mail/spam',[SalesMailController::class, 'spamMail'])->name('sales.mail.spam');

//Stats
Route::get('/sales/stats',[SalesStatsController::class, 'statsIndex'])->name('sales.stats.index');
Route::get('/sales/stats/analytics/status',[SalesStatsController::class, 'viewStatus'])->name('sales.stats.analytics.status');
Route::get('/sales/stats/analytics/revenue',[SalesStatsController::class, 'viewRevenue'])->name('sales.stats.analytics.revenue');
Route::get('/sales/stats/analytics/forecast',[SalesStatsController::class, 'viewForecast'])->name('sales.stats.analytics.forecast');