<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales\Customer;

class SalesCustomerController extends Controller
{
    public function showCustomersList()
    {
        $customers = Customer::all();
        return view('sales.customers.list')->with('customers', $customers);
    }

    public function sendEmail($id)
    {
        return view('sales.mail.send');
    }

    public function editCustomer($id)
    {
        $customer = Customer::where('id', $id)->first();
        return view('sales.customers.update')->with('customer', $customer);
    }
    // public function editProduct($id)
    // {
    //     $product = product_table::where('id', $id)->first();
    //     $warehouseList = warehouse_table::pluck('name');
    //     return view('product.list.edit')->with('product', $product)->with('warehouseList',$warehouseList);
    // }
}
