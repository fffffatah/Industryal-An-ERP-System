<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancePaymentController extends Controller
{
    public function index(){
        return view('finance.payments.index');
    }
}
