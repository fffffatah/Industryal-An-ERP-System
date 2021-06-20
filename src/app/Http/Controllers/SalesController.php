<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function dashboardIndex(){
        return view('sales.dashboard.index');
    }
    // public function index_invoice(){
    //     return view('finance.invoice.index');
    // }
    // public function index_invoice_listcustomer(){
    //     return view('finance.invoice.listcustomer.index');
    // }
    // public function index_invoice_listsupplier(){
    //     return view('finance.invoice.listsupplier.index');
    // }
}
