<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\UserChangePasswordRequest;
use App\Http\Requests\Product\UserEditProfileRequest;
use App\Http\Requests\Product\UserProfilePicUpdateRequest;
use App\Http\Requests\Product\UserCodeRequest;
use App\Http\Requests\Product\LeaveRequest;
use App\Http\Requests\Product\ContactRequest;
use App\Models\Product\activities_table;
use App\Models\User;
use App\Models\Leave;

class ProductUserController extends Controller
{
    // show activities
    public function activities(Request $req)
    {
        if($req->searchActivity)
        {
            $allActivities = activities_table::where('type', $req->searchActivity)->get();
            return view('product.user.activities.index')->with('allActivities', $allActivities);
        }
        else
        {
            $allActivities = activities_table::all();
            return view('product.user.activities.index')->with('allActivities', $allActivities);
        }
    }

    // leave request
    public function leave()
    {
        return view('product.user.leave.index');
    }
    public function verifyLeave(LeaveRequest $req)
    {
        $leave_type = $req->leave_type;
        $leave_start_date = $req->leave_start_date;
        $leave_end_date = $req->leave_end_date;
        $leave_description = $req->leave_description;

        $username = $req->session()->get('username');
        $user = User::where('username', $username)->first();
        $emp_id = $user->id;
        $emp_type = $user->type;
        
        $leave = new Leave;

        $leave->employee_id = $emp_id;
        $leave->type = $emp_type;
        $leave->request_description = $leave_description;
        $leave->start_time = $leave_start_date;
        $leave->end_time = $leave_end_date;
        $leave->request_made = date("Y-m-d H:i:s");
        $leave->status = "Pending";

        $leave->save();
        $req->session()->flash('msg', 'Leave request sent to HR');
        return back();
    }

    // contact administration
    public function administration()
    {
        return view('product.user.administration.index');
    }
    public function verifyAdministration(ContactRequest $req)
    {
        
    }

    // show profile
    public function profile()
    {
        $username = session()->get('username');
        $user = User::where('username', $username)->first();
        return view('product.user.profile.index')->with('userDetails', $user);
    }

    // edit profile
    public function editProfile()
    {
        $username = session()->get('username');
        $user = User::where('username', $username)->first();
        return view('product.user.profile.edit')->with('userDetails', $user);
    }
    public function editProfileVerify(UserEditProfileRequest $req)
    {
        $curr_pass = $req->current_password;
        $username = session()->get('username');
        $user = User::where('username', $username)->first();
        if($curr_pass == $user->pass)
        {
            $user->firstname = $req->firstname;
            $user->lastname = $req->lastname;
            $user->phone = $req->phone;
            $user->email = $req->email;
            $user->address = $req->address;
            $user->save();
            $req->session()->flash('msg','Profile Updated!');
            return redirect()->route('userProfile.index');
        }
        else
        {
            $req->session()->flash('msg','Wrong Current Password!');
            return back();
        }
    }

    // edit profile picture
    public function editProfilePicture()
    {
        $username = session()->get('username');
        $user = User::where('username', $username)->first();
        return view('product.user.profile.editProfilePicture')->with('userDetails', $user);
    }
    public function editProfilePictureVerify(UserProfilePicUpdateRequest $req)
    {
        $curr_pass = $req->current_password;
        $username = session()->get('username');
        $user = User::where('username', $username)->first();
        if($curr_pass == $user->pass)
        {
            $img = $req->file('profile_pic');
            $user->profile_pic = $username.'.'.$img->getClientOriginalExtension();
            $user->save();
            $img->move('upload/Users', $username.'.'.$img->getClientOriginalExtension());
            $req->session()->flash('msg','Profile Updated!');
            return redirect()->route('userProfile.index');
        }
        else
        {
            $req->session()->flash('msg','Wrong Current Password!');
            return back();
        }
    }

    // change password
    public function changePassword()
    {
        $username = session()->get('username');
        $user = User::where('username', $username)->first();
        return view('product.user.profile.changePassword')->with('userDetails', $user);
    }
    public function changePasswordVerify(UserChangePasswordRequest $req)
    {
        return redirect()->route('userChangeProfileVerication.index');
    }

    // verfication code
    public function verification()
    {
        $username = session()->get('username');
        $user = User::where('username', $username)->first();
        return view('product.user.profile.verificationCode')->with('userDetails', $user);
    }
    public function verificationVerify(UserCodeRequest $req)
    {
        return redirect()->route('userProfile.index');
    }

    // logout
    public function logout()
    {
        session()->flush();
        return redirect()->route('signin.index');
    }
}
