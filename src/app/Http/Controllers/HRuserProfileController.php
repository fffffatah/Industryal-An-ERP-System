<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\HR\ProfileEditRequest;
use App\Http\Requests\HR\ChangePassRequest;
use App\Models\User;

class HRuserProfileController extends Controller
{
    public function details()
    {
        $user_name= session()->get('username');
        $user = User::where('username', $user_name)->first();
        return view('HR.User.profile.index')->with('userinfo', $user);;
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
