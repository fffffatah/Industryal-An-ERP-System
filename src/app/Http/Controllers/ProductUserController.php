<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductUserController extends Controller
{
    public function activities()
    {
        return view('product.user.activities.index');
    }
}
