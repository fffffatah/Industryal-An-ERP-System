<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesCustomerController extends Controller
{
    public function showCustomersList()
    {
        return view('sales.customers.list');
    }
}
