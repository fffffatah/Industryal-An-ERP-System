<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WarehouseCreateController extends Controller
{
    public function index()
    {
        return view('product.warehouse.create.index');
    }
}
