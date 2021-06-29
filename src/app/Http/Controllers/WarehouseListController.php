<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\warehouse_table;
use App\Models\Product\product_table;
use App\Http\Requests\Product\WarehouseCreateRequest;
use App\Exports\WarehouseExport;
use Maatwebsite\Excel\Facades\Excel;

class WarehouseListController extends Controller
{
    public function index()
    {
        $warehouse_list = warehouse_table::all();
        return view('product.warehouse.list.index')->with('warehouseList', $warehouse_list);
    }

    public function editWarehouse($warehouse_id)
    {
        $warehouse = warehouse_table::where('warehouse_id', $warehouse_id)->first();
        return view('product.warehouse.list.edit')->with('warehouse', $warehouse);
    }

    public function updateWarehouse(WarehouseCreateRequest $req, $warehouse_id)
    {
        $warehouse = warehouse_table::where('warehouse_id', $warehouse_id)->first();
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
        $warehouse->last_updated = date('Y-m-d');
        $warehouse->save();

        return redirect()->route('warehouseList.index');
    }

    public function exportWarehouseList()
    {
        return Excel::download(new WarehouseExport, 'warehouse_details.xlsx');
    }
}
