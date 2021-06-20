<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HRhomeController extends Controller
{
     public function index()
     {
        return view('HR.home.index');
     }
}
