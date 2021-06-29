<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\warehouse_table;

class WarehouseStatisticsController extends Controller
{
    public function index()
    {
        $allData = $this->chartInformation();
        $warehouseData = $allData['warehouseChartData'];
        return view('product.warehouse.statistics.index')->with('warehouseData',$warehouseData);
    }

    public function chartInformation()
    {
        // Warehouse chart
        $warehouses = warehouse_table::all();
        $warehouseCnt = []; // warehouse wise remaining quantity
        foreach($warehouses as $item)
        {
            $currWarehouse = $item->name;
            $currWarehouseQuantity = $item->remaining_quantity;
            $warehouseCnt += [$currWarehouse => $currWarehouseQuantity];
        }

        $warehouseChartData = ""; // for rendering in chart
        foreach($warehouseCnt as $x => $x_value)
        {
            $warehouseChartData .= "['".$x."',".$x_value."],";
        }
        $warehouseChartData = rtrim($warehouseChartData,",");

        return ["warehouseChartData" => $warehouseChartData]; 
    }
}
