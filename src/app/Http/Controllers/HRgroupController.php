<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\HR\EmployeeGroupRequest;

class HRgroupController extends Controller
{
     public function index()
     {
         return view('HR.employee.index');
     }
    public function CreateGroup(EmployeeGroupRequest $req)
    {
        return redirect()->route('HRemployee.emplist');
    }
}
