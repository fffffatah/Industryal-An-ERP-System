<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sales\OrderModel;
use Illuminate\Http\Request;

class SalesOrderController extends Controller
{
    public function ordersList()
    {
        $orders = OrderModel::all();

        return view('sales.orders.list')->with('orders', $orders);
    }
    
    public function createOrder()
    {

    }
    public function transactionList()
    {

    }
    // public function orderList()
    // {

    // }

}
