<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index_dashboard(){
        return view('finance.dashboard.index');
    }
}
