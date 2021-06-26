<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\HR\HRuserCreateRequest;

class HRuserController extends Controller
{
    public function create(){
        return view('HR.User.userCreate');
    }
    public function Index(){
        return view('HR.User.userList');
    }
    public function userCreate(HRuserCreateRequest $req)
    {
        return redirect()->route('HRuser.index');
    }

}
