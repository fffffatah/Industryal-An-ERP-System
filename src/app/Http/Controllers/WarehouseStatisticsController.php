<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WarehouseStatisticsController extends Controller
{
    public function index()
    {
        return view('product.warehouse.statistics.index');
    }
}
