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
        return view('sales.customers.mail.send');
    }

    public function allMail()
    {
        return view('sales.customers.mail.all');
    }
    public function sentMail()
    {
        return view('sales.customers.mail.sent');
    }
    public function receivedMail()
    {
        return view('sales.customers.mail.received');
    }
    public function spamMail()
    {
        return view('sales.customers.mail.spam');
    }
}
