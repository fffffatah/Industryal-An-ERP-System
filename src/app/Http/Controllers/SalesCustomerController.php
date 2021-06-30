<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sales\SalesCustomerUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Sales\Customer;

class SalesCustomerController extends Controller
{
    public function showCustomersList()
    {
        $customers = Customer::all();
        return view('sales.customers.list')->with('customers', $customers);
    }

    public function sendEmail($id)
    {
        return view('sales.mail.send');
    }

    public function editCustomer($id)
    {
        $customer = Customer::where('id', $id)->first();
        return view('sales.customers.update')->with('customer', $customer);
    }

    public function updateCustomer(SalesCustomerUpdateRequest $req,$id) 
    {
        $customer = Customer::where('id');
        return view('sales.mail.send');
    }

    // public function updateProduct(ProductCreateRequest $req,$id)
    // {
    //      $product = product_table::where('id', $id)->first();
    //      $product->product_id = $req->product_id;
    //      $product->product_name = $req->product_name;
    //      $product->status_sell = $req->product_sell_status;
    //      $product->status_purchase = $req->product_purchase_status;
    //      $product->product_description = $req->product_description;
    //      $product->warehouse_name = $req->warehouse_name;
    //      $product->stock = $req->product_stock;
    //      $product->nature = $req->product_nature;
    //      $product->weight = $req->product_weight;
    //      $product->weight_unit = $req->product_weight_unit;
    //      $product->dimention = $req->product_dimention;
    //      $product->dimention_unit = $req->product_dimention_unit;
    //      $product->selling_price = $req->product_selling_price;
    //      $product->tax = $req->product_selling_tax;
    //      $product->product_condition = $req->product_condition;
    //      $product->last_updated = date('Y-m-d');
    //      $product->save();

    //      // activity
    //     $activity = new activities_table;
    //     $activity->type = "Update Product";
    //     $activity->description = "Product Id: ".$req->product_id.", "."Product Name: ".$req->product_name;
    //     $activity->activity_time = date("Y-m-d H:i:s");
    //     $activity->save();

    //     return redirect()->route('productList.index');
    // }
    // public function editProduct($id)
    // {
    //     $product = product_table::where('id', $id)->first();
    //     $warehouseList = warehouse_table::pluck('name');
    //     return view('product.list.edit')->with('product', $product)->with('warehouseList',$warehouseList);
    // }
}
