<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesStatsController;
use App\Http\Controllers\SalesCustomerController;
use App\Http\Controllers\SalesProfileController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SalesMailController;

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

Route::get('/sales/profile',[SalesProfileController::class, 'profiledIndex'])->name('sales.profile.details.index');

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

Route::get('/sales/profile/change/password',[SalesProfileController::class, 'updatePassword'])->name('sales.profile.edit.password');

Route::get('/sales/customers/',[SalesCustomerController::class, 'showCustomersList'])->name('sales.customers.list');

Route::get('/sales/mail/send',[SalesMailController::class, 'sendEmail'])->name('sales.mail.send');

Route::get('/sales/mail/all',[SalesMailController::class, 'allMail'])->name('sales.mail.all');
Route::get('/sales/mail/sent',[SalesMailController::class, 'sentMail'])->name('sales.mail.sent');
Route::get('/sales/mail/received',[SalesMailController::class, 'receivedMail'])->name('sales.mail.received');
Route::get('/sales/mail/spam',[SalesMailController::class, 'spamMail'])->name('sales.mail.spam');

Route::get('/sales/stats/analytics/status',[SalesStatsController::class, 'viewStatus'])->name('sales.stats.analytics.status');

Route::get('/sales/stats/analytics/revenue',[SalesStatsController::class, 'viewRevenue'])->name('sales.stats.analytics.revenue');

Route::get('/sales/stats/analytics/forecast',[SalesStatsController::class, 'viewForecast'])->name('sales.stats.analytics.forecast');

Route::get('/sales/customers/list', function(){
    return view('sales.customers.list');
});