<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index(){

        $productManager = User::where('type','product')->first();
        return view('common.admin.index')->with('productManegerDetails', $productManager);
        $HrManger=User::where('type','hr')->first();
        return view('common.admin.index')->with('HrManager', $HrManager);
    }
}
