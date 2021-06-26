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

    public function profileEdit()
    {
        return view('HR.User.profile.profileEdit');
    }
    public function changePassword()
    {
        return view('HR.User.profile.changePass');
    }
    public function uploadImage()
    {
        return view('HR.User.profile.upload');
    }

}
