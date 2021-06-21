<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HRuserProfileController extends Controller
{
    public function details()
    {
        return view('HR.User.profile.index');
    }
}
