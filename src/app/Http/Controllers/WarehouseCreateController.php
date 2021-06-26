<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\WarehouseCreateRequest;
use App\Models\Product\warehouse_table;

class WarehouseCreateController extends Controller
{
    public function index()
    {
        return view('product.warehouse.create.index');
    }

    public function create(WarehouseCreateRequest $req)
    {
        $warehouse = new warehouse_table;

        $warehouse->warehouse_id = $req->warehouse_id;
        $warehouse->name = $req->warehouse_name;
        $warehouse->description = $req->warehouse_description;
        $warehouse->address = $req->warehouse_address;
        $warehouse->zip_code = $req->warehouse_zip_code;
        $warehouse->city = $req->warehouse_city;
        $warehouse->country = $req->warehouse_country;
        $warehouse->phone = $req->warehouse_phone;
        $warehouse->status = $req->warehouse_status;
        $warehouse->quantity = $req->warehouse_quantity;
        $warehouse->save();

        return redirect()->route('warehouseList.index');
    }
}
