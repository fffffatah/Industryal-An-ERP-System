<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\product_table;

class ProductListController extends Controller
{
    public function index()
    {
        $list = product_table::all();
        return view('product.list.index')->with('productList', $list);
    }

    public function faulty()
    {
        return view('product.list.faulty');
    }
}
