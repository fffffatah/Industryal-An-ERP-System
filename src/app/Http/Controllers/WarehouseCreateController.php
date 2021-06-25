<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\WarehouseCreateRequest;

class WarehouseCreateController extends Controller
{
    public function index()
    {
        return view('product.warehouse.create.index');
    }

    public function create(WarehouseCreateRequest $req)
    {
        return redirect()->route('warehouseList.index');
    }
}
