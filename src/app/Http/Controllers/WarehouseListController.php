<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WarehouseListController extends Controller
{
    public function index()
    {
        return view('product.warehouse.list.index');
    }
}
