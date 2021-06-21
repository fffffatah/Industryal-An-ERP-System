<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HREmpScheduleController extends Controller
{
    public function schedule()
    {
        return view('HR.employee.empSchedule');
    }
}
