<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\HR\LeaveRequest;
use App\Models\Leave;
use App\Models\User;

class HRLeaveController extends Controller
{
    public function leave()
    {
       
        return view('HR.Leave.createLeaveReq');
    }
    public function leaveList()
    {

        $leaves=Leave::all();
        return view('HR.Leave.LeaveList')->with('leaveList',$leaves);
    }
    public function VerifyLeave(LeaveRequest $req)
    {
        $username = $req->session()->get('username');
        $user = User::where('username', $username)->first();
        $emp_id = $user->id;
        $emp_type = $user->type;
        
        $leave = new Leave;

        $leave->employee_id = $emp_id;
        $leave->type = $req->type;
        $leave->request_description = $req->description;
        $leave->start_time = $req->start_date;
        $leave->end_time = $req->end_date;
        $leave->request_made = date("Y-m-d H:i:s");
        $leave->status = "Pending";

        $leave->save();
        $req->session()->flash('msg', 'Leave request sent Successfully');
        return redirect()->route('HRLeave.leaveList');
    }
    public function approve($employee_id)
    {

        $leave = Leave::where('employee_id', $employee_id)->first();
        return view('HR.Leave.approve')->with('leave',$leave);
    }
    public function VerifyApprove($employee_id,Request $req)
    {
        $leave = Leave::where('employee_id', $employee_id)->first();
        if($leave->status=="Pending")
        {
            $leave->status="Approved";
            $leave->save();
            $req->session()->flash('msg', 'Approved Leave request');
            return redirect()->route('HRLeave.leaveList');
            
        }
        else
        {
            $req->session()->flash('msg', 'Failed!!!');
            return redirect()->route('HRLeave.leaveList');
        }
        
        
    }
    public function reject($employee_id)
    {

        $leave = Leave::where('employee_id', $employee_id)->first();
        return view('HR.Leave.reject')->with('leave',$leave);
    }
    public function VerifyReject($employee_id,Request $req )
    {
        $leave = Leave::where('employee_id', $employee_id)->first();
        if($leave->status=="Pending")
        {
            $leave->status="Declined";
            $leave->save();
            $req->session()->flash('msg', 'Reject Leave request');
            return redirect()->route('HRLeave.leaveList');
        }
        else
        {
            $req->session()->flash('msg', 'Failed!!!');
            return redirect()->route('HRLeave.leaveList');
        }
       
        
        
    }

    
}
