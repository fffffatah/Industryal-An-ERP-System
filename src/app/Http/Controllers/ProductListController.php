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

    public function deleteProduct($product_id)
    {
        $product = product_table::where('product_id', $product_id)->first();
        return view('product.list.details')->with('product', $product);
    }

    public function destroyProduct($product_id)
    {
        product_table::where('product_id', $product_id)->delete();
        return redirect()->route('productList.index');
    }

    public function faulty()
    {
        return view('product.list.faulty');
    }
}
