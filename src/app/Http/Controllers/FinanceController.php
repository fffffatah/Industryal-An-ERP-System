<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index_dashboard(){
        return view('finance.dashboard.index');
    }
    public function index_invoice(){
        return view('finance.invoice.index');
    }
    public function index_invoice_listcustomer(){
        return view('finance.invoice.listcustomer.index');
    }
    public function index_invoice_listsupplier(){
        return view('finance.invoice.listsupplier.index');
    }
}
