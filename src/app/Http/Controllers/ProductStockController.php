<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\product_table;

class ProductStockController extends Controller
{
    public function index(Request $req)
    {
        if($req->searchProduct)
        {
            $searchProduct = product_table::where('product_name', $req->searchProduct)->get();
            return view('product.stocks.index')->with('productList', $searchProduct);
        }
        else
        {
            $productList = product_table::all();
            return view('product.stocks.index')->with('productList', $productList);
        }
    }
}
