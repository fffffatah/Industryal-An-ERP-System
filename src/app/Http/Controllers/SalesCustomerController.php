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

    public function sendEmail()
    {
        return view('sales.mail.send');
    }

    
}
