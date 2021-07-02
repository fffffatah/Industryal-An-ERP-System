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
    public function existingOrNew(Request $req)
    {
        $id = $req->cus_id;
        // return view('sales.orders.create', ['id' => $id]);
        if(empty($id))
        {
            return view('sales.orders.transactions.confirm');
        }
        else
        {
            $customer = CustomerModel::where('id', $req->cus_id)->first();
            if($customer)
            {
                return view('sales.orders.create')->with('id', $id);
            }
            else
            {
                return view('sales.orders.transactions.confirm');
            }
            // return redirect('/sales/orders/create/confirm/'.$id);
            // return redirect('sales.orders.createExisting');
        }
    }

    // public function existingCusOrder(Request $req, $id)
    // {
    //     return view('sales.orders.create');
    // }

    public function transactionsList()
    {
        return view('sales.orders.transactions.list');
    }
    
    public function createExistingCusOrder(Request $req)
    {
        $customer = CustomerModel::where('id', $req->cus_id)->first();
        if($customer)
        {
            return view("sales.orders.createjjjj");
        }
        else
        {
            return view("sales.orders.transactions.existing");
        }
    }

}
