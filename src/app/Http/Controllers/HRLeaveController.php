<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HRLeaveController extends Controller
{
    public function leave()
    {
        return view('HR.Leave.createLeaveReq');
    }
}
