<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesProfileController extends Controller
{
    public function profileIndex(){
        return view('sales.profile.details.index');
    }
}
