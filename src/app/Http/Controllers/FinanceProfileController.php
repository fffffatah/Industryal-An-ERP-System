<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceProfileController extends Controller
{
    public function index(){
        return view('finance.profile.index');
    }
}
