<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes (Finance and Accounting Features)
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/finance/dashboard', ['as'=>'finance.dashboard.index', 'uses'=>'FinanceController@index_dashboard']);

#Profile Routes
Route::get('/finance/profile', ['as'=>'finance.profile.index', 'uses'=>'FinanceProfileController@index']);

#Routes for Invoice
Route::get('/finance/invoice', ['as'=>'finance.invoice.index', 'uses'=>'FinanceInvoiceController@index_invoice']);
Route::get('/finance/invoice/listcustomer', ['as'=>'finance.invoice.listcustomer', 'uses'=>'FinanceInvoiceController@index_invoice_listcustomer']);
Route::get('/finance/invoice/listsupplier', ['as'=>'finance.invoice.listsupplier', 'uses'=>'FinanceInvoiceController@index_invoice_listsupplier']);
Route::get('/finance/invoice/customer', ['as'=>'finance.invoice.customer', 'uses'=>'FinanceInvoiceController@index_invoice_newcustomer']);
Route::get('/finance/invoice/supplier', ['as'=>'finance.invoice.supplier', 'uses'=>'FinanceInvoiceController@index_invoice_newsupplier']);

#Routes for Leave-Request
Route::get('/finance/leaverequest', ['as'=>'finance.leaverequest.index', 'uses'=>'FinanceLeaveRequestController@index']);
Route::get('/finance/leaverequest/list', ['as'=>'finance.leaverequest.list', 'uses'=>'FinanceLeaveRequestController@index_list']);
Route::get('/finance/leaverequest/new', ['as'=>'finance.leaverequest.new', 'uses'=>'FinanceLeaveRequestController@index_new']);

#Routes for Chat
Route::get('/finance/chat', ['as'=>'finance.chat.index', 'uses'=>'FinanceChatController@index']);