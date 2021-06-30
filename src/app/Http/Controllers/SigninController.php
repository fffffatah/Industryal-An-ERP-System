<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
 
class SigninController extends Controller
{
    public function index(){
        return view('common.signin.index');
    }
    //Dummy Verifcation
    public function verify(Request $req){
 
        $user = User::where('email',$req->email)->where('pass',$req->pass)->first();
        if($user)
        {
            if($user->type == 'admin'){
                //admin
            }
            elseif ($user->type == 'sales') {
                //Redirect to Sales Dashboard
            }
            elseif ($user->type == 'product') {
                return redirect()->route('productHome.index');
            }
            elseif ($user->type == 'HR') {
                return redirect()->route('HRhome.index');
            }
            elseif ($user->type == 'finance') {
                return redirect()->route('finance.dashboard.index');
            }
        }
        else
        {
            return back();
        }
    }
}
 