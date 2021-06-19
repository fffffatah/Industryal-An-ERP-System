<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HRemployeeController extends Controller
{
    public function create()
    {
        return view('HR.employee.employeeCreate');
    }
}
