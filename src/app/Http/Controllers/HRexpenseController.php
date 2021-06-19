<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HRexpenseController extends Controller
{
    public function report()
    {
        return view('HR.expense.expenseReport');
    }
}
