<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\warehouse_table;

class WarehouseListController extends Controller
{
    public function index()
    {
        $warehouse_list = warehouse_table::all();
        return view('product.warehouse.list.index')->with('warehouseList', $warehouse_list);
    }
}
