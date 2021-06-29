<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\WarehouseCreateRequest;
use App\Models\Product\warehouse_table;
use App\Models\Product\activities_table;

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
        $warehouse->remaining_quantity = $req->warehouse_quantity;
        $warehouse->date_added = date('Y-m-d');
        $warehouse->last_updated = date('Y-m-d');
        $warehouse->save();

        // activity
        $activity = new activities_table;
        $activity->type = "Create Warehouse";
        $activity->description = "Warehouse Id: ".$req->warehouse_id.", "."Warehouse Name: ".$req->warehouse_name;
        $activity->activity_time = date("Y-m-d H:i:s");
        $activity->save();

        return redirect()->route('warehouseList.index');
    }
}
