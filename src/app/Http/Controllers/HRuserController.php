<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HRuserController extends Controller
{
    public function create(){
        return view('HR.User.userCreate');
    }
    public function Index(){
        return view('HR.User.userList');
    }

}
