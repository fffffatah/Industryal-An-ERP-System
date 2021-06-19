<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductTransferController extends Controller
{
    public function index()
    {
        return view('product.transfer.index');
    }
}
