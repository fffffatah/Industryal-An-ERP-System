<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesStatsController extends Controller
{
    public function viewStatus(){
        return view('sales.stats.analytics.status');
    }    
}
