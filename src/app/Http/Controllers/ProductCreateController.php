<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\ProductCreateRequest;
use App\Models\Product\product_table;

class ProductCreateController extends Controller
{
    public function index()
    {
        return view('product.create.index');
    }

    public function create(ProductCreateRequest $req)
    {
        $img = $req->file('product_image');

        $product = new product_table;

        $product->product_id = $req->product_id;
        $product->product_name = $req->product_name;
        $product->status_sell = $req->product_sell_status;
        $product->status_purchase = $req->product_purchase_status;
        $product->product_description = $req->product_description;
        $product->warehouse_name = $req->warehouse_name;
        $product->stock = $req->product_stock;
        $product->nature = $req->product_nature;
        $product->weight = $req->product_weight." ".$req->product_weight_unit;
        $product->dimention = $req->product_dimention." ".$req->product_dimention_unit;
        $product->selling_price = $req->product_selling_price;
        $product->tax = $req->product_selling_tax;
        $product->image = $req->product_id.'.'.$img->getClientOriginalExtension();
        $product->product_condition = $req->product_weight;
        $product->product_condition = "Good";

        $img->move('upload/Product', $req->product_id.'.'.$img->getClientOriginalExtension());
        $product->save();

        return redirect()->route('productList.index');
    }
}
