<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\UserChangePasswordRequest;
use App\Http\Requests\Product\UserEditProfileRequest;
use App\Http\Requests\Product\UserCodeRequest;

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
    public function editProfileVerify(UserEditProfileRequest $req)
    {
        return redirect()->route('userProfile.index');
    }
    public function editProfilePicture()
    {
        return view('product.user.profile.editProfilePicture');
    }
    public function editProfilePictureVerify(UserEditProfileRequest $req)
    {
        return redirect()->route('userProfile.index');
    }
    public function changePassword()
    {
        return view('product.user.profile.changePassword');
    }
    public function changePasswordVerify(UserChangePasswordRequest $req)
    {
        return redirect()->route('userChangeProfileVerication.index');
    }
    public function verification()
    {
        return view('product.user.profile.verificationCode');
    }
    public function verificationVerify(UserCodeRequest $req)
    {
        return redirect()->route('userProfile.index');
    }
}
