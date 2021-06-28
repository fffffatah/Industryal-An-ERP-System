<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\product_table;
use App\Models\Product\warehouse_table;

class ProductStatisticsController extends Controller
{
    public function index()
    {
        // Product chart
        $products = product_table::all();
        $allProducts = array(); // all types of products
        foreach($products as $item)
        {
            $currProduct = $item->product_name;
            $check = FALSE; 
            foreach($allProducts as $product)
            {
                if($product == $currProduct)
                {
                    $check = TRUE;
                    break;
                }
            }
            if(!$check)
            {
              array_push($allProducts,$currProduct);  
            }
        }

        $productCnt = []; // product wise stock
        foreach($allProducts as $currProduct)
        {
            $cnt = 0;
            foreach($products as $item)
            {
                if($item->product_name == $currProduct)
                {
                    $cnt += $item->stock;
                }
            }
            $productCnt += [$currProduct => $cnt];
        }

        $chartData = ""; // for rendering in chart
        foreach($productCnt as $x => $x_value)
        {
            $chartData .= "['".$x."',".$x_value."],";
        }
        $chartData = rtrim($chartData,",");


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


        return view('product.statistics.index')->with('chartData',$chartData)
                                               ->with('warehouseChartData', $warehouseChartData);
    }
}
