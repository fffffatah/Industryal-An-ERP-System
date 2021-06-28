<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\product_table;

class ProductStockController extends Controller
{
    public function index()
    {
        $productList = product_table::all();
        return view('product.stocks.index')->with('productList', $productList);
    }
}
