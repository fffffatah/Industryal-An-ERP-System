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

Route::group(['middleware'=>['sess', 'finance_type']], function(){
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

    #Routes for Reports
    Route::get('/finance/reports', ['as'=>'finance.reports.index', 'uses'=>'FinanceReportController@index']);
    Route::get('/finance/reports/financial', ['as'=>'finance.reports.financial', 'uses'=>'FinanceReportController@index_financial']);
    Route::get('/finance/reports/invoice', ['as'=>'finance.reports.invoice', 'uses'=>'FinanceReportController@index_invoice']);

    #Routes for Import/Export
    Route::get('/finance/importexport', ['as'=>'finance.importexport.index', 'uses'=>'FinanceImportExportController@index']);
    Route::get('/finance/importexport/history', ['as'=>'finance.importexport.history', 'uses'=>'FinanceImportExportController@index_history']);
    Route::get('/finance/importexport/import', ['as'=>'finance.importexport.import', 'uses'=>'FinanceImportExportController@index_import']);
    Route::get('/finance/importexport/export', ['as'=>'finance.importexport.export', 'uses'=>'FinanceImportExportController@index_export']);

    #Routes for Budgeting
    Route::get('/finance/budgeting', ['as'=>'finance.budgeting.index', 'uses'=>'FinanceBudgetingController@index']);
    Route::get('/finance/budgeting/connectedbanks', ['as'=>'finance.budgeting.connectedbanks', 'uses'=>'FinanceBudgetingController@index_connectedbanks']);
    Route::get('/finance/budgeting/newbank', ['as'=>'finance.budgeting.newbank', 'uses'=>'FinanceBudgetingController@index_newbank']);

    #Routes for Payments
    Route::get('/finance/payments', ['as'=>'finance.payments.index', 'uses'=>'FinancePaymentController@index']);

    #Routes for Chat
    Route::get('/finance/chat', ['as'=>'finance.chat.index', 'uses'=>'FinanceChatController@index']);
});