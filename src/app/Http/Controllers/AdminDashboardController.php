<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index(){
        $HrManger=User::where('type','hr')->first();
        return view('common.admin.index')->with('HrManager',$HrManger);
    }
}
