<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //Admin View
    public function admin(){
        return view('common.signup.admin.index');
    }
    //Employee View
    public function employee(){
        return view('common.signup.employee.index');
    }
}
