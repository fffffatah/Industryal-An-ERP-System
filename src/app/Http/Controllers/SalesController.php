<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function dashboardIndex(){
        return view('sales.dashboard.index');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('signin.index');
    }
}
