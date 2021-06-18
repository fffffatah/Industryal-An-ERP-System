<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function index()
    {
        return view('product.list.index');
    }

    public function faulty()
    {
        return view('product.list.faulty');
    }
}
