<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductStockController extends Controller
{
    public function index()
    {
        return view('product.stocks.index');
    }
}
