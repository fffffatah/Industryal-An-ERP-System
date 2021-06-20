<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceInvoiceController extends Controller
{
    public function index_invoice(){
        return view('finance.invoice.index');
    }
    public function index_invoice_listcustomer(){
        return view('finance.invoice.listcustomer');
    }
    public function index_invoice_listsupplier(){
        return view('finance.invoice.listsupplier');
    }

    public function index_invoice_newcustomer(){
        return view('finance.invoice.customer');
    }
    public function index_invoice_newsupplier(){
        return view('finance.invoice.supplier');
    }
}
