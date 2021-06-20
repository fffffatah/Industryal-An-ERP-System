<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceBudgetingController extends Controller
{
    public function index(){
        return view('finance.budgeting.index');
    }
    public function index_connectedbanks(){
        return view('finance.budgeting.connectedbanks');
    }
    public function index_newbank(){
        return view('finance.budgeting.newbank');
    }
}
