<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\HR\expenseReportRequest;

class HRexpenseController extends Controller
{
    public function report()
    {
        return view('HR.expense.expenseReport');
    }
    public function create(expenseReportRequest $req)
    {
        return redirect()->route('HRexpenseList.list');
    }
}
