<?php

namespace App\Http\Controllers;

use App\Models\Sales\OrderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    public function dashboardIndex(){
        $ordersByMonth = DB::table('orders')->select(DB::raw('sum(total_amount) as total'))->groupBy(DB::raw("MONTH(delivered_on)"))->get();
        $totalRevenue = DB::table('orders')->select(DB::raw("sum(total_amount) as revenue"))->where("type", "debit")->get();
        return view('sales.dashboard.index')->with('amountsByMonth', $ordersByMonth)->with('totalRev', $totalRevenue);
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('signin.index');
    }
}
