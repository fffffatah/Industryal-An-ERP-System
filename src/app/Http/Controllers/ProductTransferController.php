<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TransferProductRequest;

class ProductTransferController extends Controller
{
    public function index()
    {
        return view('product.transfer.index');
    }

    public function transfer(TransferProductRequest $req)
    {
        return redirect()->rouote('productTransfer.index');
    }
}
