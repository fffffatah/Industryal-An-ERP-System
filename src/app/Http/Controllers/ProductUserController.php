<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\UserChangePasswordRequest;
use App\Http\Requests\Product\UserEditProfileRequest;
use App\Http\Requests\Product\UserCodeRequest;
use App\Http\Requests\Product\LeaveRequest;
use App\Http\Requests\Product\ContactRequest;
use App\Models\Product\activities_table;
use App\Models\User;
use App\Models\Leave;

class ProductUserController extends Controller
{
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
    public function administration()
    {
        return view('product.user.administration.index');
    }
    public function verifyAdministration(ContactRequest $req)
    {
        
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

    public function logout()
    {
        session()->flush();
        return redirect()->route('signin.index');
    }
}
