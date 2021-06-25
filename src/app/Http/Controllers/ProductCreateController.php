<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\ProductCreateRequest;

class ProductCreateController extends Controller
{
    public function index()
    {
        return view('product.create.index');
    }

    public function create(ProductCreateRequest $req)
    {
        return redirect()->route('productList.index');
    }
}
