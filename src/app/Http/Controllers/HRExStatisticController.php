<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HRExStatisticController extends Controller
{
    public function statistic()
    {
        return view('HR.expense.Statistic');
    }
}
