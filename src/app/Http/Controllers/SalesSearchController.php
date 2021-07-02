<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sales\OrderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesSearchController extends Controller
{
    public function index()
    {
        return view('search.search');
    }
    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $orders=DB::table('orders')->where('id','LIKE','%'.$request->search."%")->get();
            if($orders)
            {
                foreach ($orders as $key => $order) {
                    $output.='<tr>'.
                    '<td>'.$order->id.'</td>'.
                    '<td>'.$order->order_description.'</td>'.
                    '</tr>';
                }
                return Response($output);
            }
        }
    }
}
