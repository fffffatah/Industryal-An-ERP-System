<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductCreateController extends Controller
{
    public function index()
    {
        return view('product.create.index');
    }
}