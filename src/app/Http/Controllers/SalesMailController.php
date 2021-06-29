<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales\Customer;

class SalesMailController extends Controller
{   
    public function sendEmail()
    {
        return view('sales.mail.send');
    }

    public function allMail()
    {
        return view('sales.mail.all');
    }
    public function sentMail()
    {
        return view('sales.mail.sent');
    }
    public function receivedMail()
    {
        return view('sales.mail.received');
    }
    public function spamMail()
    {
        return view('sales.mail.spam');
    }
}
