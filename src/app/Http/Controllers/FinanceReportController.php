<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceReportController extends Controller
{
    public function index(){
        return view('finance.reports.index');
    }
    public function index_invoice(){
        return view('finance.reports.invoice');
    }
    public function index_financial(){
        return view('finance.reports.financial');
    }
}
