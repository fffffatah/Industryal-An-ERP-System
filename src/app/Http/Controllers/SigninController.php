<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function index(){
        return view('common.signin.index');
    }
    //Dummy Verifcation
    public function verify(Request $req){
        if($req->email == 'admin'){
            //admin
        }
        elseif ($req->email == 'sales') {
            //Redirect to Sales Dashboard
        }
        elseif ($req->email == 'product') {
            //Redirect to Product Dashboard
        }
        elseif ($req->email == 'hr') {
            //Redirect to HR Dashboard
        }
        elseif ($req->email == 'finance') {
            return redirect()->route('finance.dashboard.index');
        }
    }
}
