<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\HR\HRempCreateRequest;

class HRemployeeController extends Controller
{
    public function create()
    {
        return view('HR.employee.employeeCreate');
    }

    public function emplist()
    {
        return view('HR.employee.employeeList');
    }
    public function index(HRempCreateRequest $req)
    {
        return redirect()->route('HRemployee.emplist');
    }
    
}
