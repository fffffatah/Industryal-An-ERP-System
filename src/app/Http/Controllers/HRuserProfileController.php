<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\HR\ProfileEditRequest;
use App\Http\Requests\HR\ChangePassRequest;

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
    public function profileUpdate(ProfileEditRequest $req)
    {
        return redirect()->route('HRuserProfile.details');
    }
    public function changePassword()
    {
        return view('HR.User.profile.changePass');
    }
    public function PasswordUpdate(ChangePassRequest $req)
    {
        return redirect()->route('HRuserProfile.details');
    }
    public function uploadImage()
    {
        return view('HR.User.profile.upload');
    }
    public function logout()
    {
        session()->flush();
        return redirect()->route('signin.index');
    }

}
