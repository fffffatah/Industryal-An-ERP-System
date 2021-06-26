<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\product_table;
use Illuminate\Support\Facades\File;

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
        $product = product_table::where('product_id', $product_id)->first();
        $img_path = "upload/Product/".$product['image'];
        if(File::exists($img_path)) 
        {
            File::delete($img_path);
        }
        product_table::where('product_id', $product_id)->delete();
        return redirect()->route('productList.index');
    }

    public function faulty()
    {
        return view('product.list.faulty');
    }
}
