<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesCustomerController extends Controller
{
    public function showCustomersList()
    {
        return view('sales.customers.list');
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
