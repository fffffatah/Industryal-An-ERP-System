<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HRexpenseListController extends Controller
{
     public function list()
     {
        return view('HR.expense.expenseList');
     }
}
