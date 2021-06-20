<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceImportExportController extends Controller
{
    public function index(){
        return view('finance.importexport.index');
    }
    public function index_history(){
        return view('finance.importexport.history');
    }
    public function index_import(){
        return view('finance.importexport.import');
    }
    public function index_export(){
        return view('finance.importexport.export');
    }
}
