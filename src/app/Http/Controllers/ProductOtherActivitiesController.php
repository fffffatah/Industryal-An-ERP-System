<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductOtherActivitiesController extends Controller
{
    public function index()
    {
        return view('product.user.activities.index');
    }
}
