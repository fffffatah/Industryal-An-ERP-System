<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceLeaveRequestController extends Controller
{
    public function index(){
        return view('finance.leaverequest.index');
    }
    public function index_list(){
        return view('finance.leaverequest.list');
    }
    public function index_new(){
        return view('finance.leaverequest.new');
    }
}
