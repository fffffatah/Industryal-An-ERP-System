<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceBudgetingController extends Controller
{
    public function index(){
        return view('finance.budgeting.index');
    }
}
