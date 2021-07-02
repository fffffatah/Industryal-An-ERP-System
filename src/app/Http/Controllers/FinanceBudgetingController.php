<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Finance\BankRequest;
use App\Models\Finance\Bank;

class FinanceBudgetingController extends Controller
{
    public function index(){
        return view('finance.budgeting.index');
    }
    public function index_connectedbanks(){
        $bank = Bank::where('manager_id',session('id'))->get();
        return view('finance.budgeting.connectedbanks')->with('banks',$bank);
    }
    public function index_newbank(){
        return view('finance.budgeting.newbank');
    }

    public function newbank(BankRequest $req){
        $bank = new Bank;
        $bank->name = $req->name;
        $bank->holder_name = $req->holder_name;
        $bank->balance = $req->balance;
        $bank->account_no = $req->account_no;
        $bank->manager_id = session('id');
        $bank->save();
        return redirect()->route('finance.budgeting.connectedbanks');
    }

    public function disconnect($id){
        Bank::destroy($id);
        return redirect()->route('finance.budgeting.connectedbanks');
    }
}
