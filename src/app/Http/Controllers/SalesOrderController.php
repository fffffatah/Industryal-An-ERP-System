<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sales\OrderModel;
use App\Models\Sales\CustomerModel;
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
        return view('sales.orders.create');
    }
    public function existingOrNew()
    {
        return view('sales.orders.transactions.confirm');
    }

    public function transactionsList()
    {
        return view('sales.orders.transactions.list');
    }
    
    public function createExistingCusOrder(Request $req, $id)
    {
        $customer = CustomerModel::where('id', $req->cus_id)->first();
        if($customer)
        {
            return view("sales.orders.create");
        }
        else
        {
            return view("sales.orders.transactions.existing");
        }
    }

}
