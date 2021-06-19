<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductUserController extends Controller
{
    public function activities()
    {
        return view('product.user.activities.index');
    }
    public function leave()
    {
        return view('product.user.leave.index');
    }
    public function administration()
    {
        return view('product.user.administration.index');
    }
    public function profile()
    {
        return view('product.user.profile.index');
    }
    public function editProfile()
    {
        return view('product.user.profile.edit');
    }
    public function editProfilePicture()
    {
        return view('product.user.profile.editProfilePicture');
    }
    public function changePassword()
    {
        return view('product.user.profile.changePassword');
    }
}
