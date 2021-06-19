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

Route::get('/finance/invoice', ['as'=>'finance.invoice.index', 'uses'=>'FinanceInvoiceController@index_invoice']);
Route::get('/finance/invoice/listcustomer', ['as'=>'finance.invoice.listcustomer', 'uses'=>'FinanceInvoiceController@index_invoice_listcustomer']);
Route::get('/finance/invoice/listsupplier', ['as'=>'finance.invoice.listsupplier', 'uses'=>'FinanceInvoiceController@index_invoice_listsupplier']);
Route::get('/finance/invoice/customer', ['as'=>'finance.invoice.customer', 'uses'=>'FinanceInvoiceController@index_invoice_newcustomer']);
Route::get('/finance/invoice/supplier', ['as'=>'finance.invoice.supplier', 'uses'=>'FinanceInvoiceController@index_invoice_newsupplier']);

Route::get('/finance/chat', ['as'=>'finance.chat.index', 'uses'=>'FinanceChatController@index']);