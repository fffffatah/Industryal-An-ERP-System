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
    public function searchOrders(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $orders=DB::table('orders')->where('id','LIKE','%'.$request->search."%")->get();
            if(!($orders->isEmpty()))
            {
                foreach ($orders as $key => $order) {
                    $output.='<tr>'.
                        '<th>'.$order->id.'</th>'.
                        '<td>'.$order->customer_id.'</td>'.
                        '<td>'.$order->order_description.'</td>'.
                        '<td>'.$order->total_amount.'</td>'.
                        '<td>'.$order->order_made.'</td>'.
                        '<td>'.$order->status.'</td>'.
                        '<td>'.$order->delivered_on.'</td>'.
                        '<td align="center">
                            <a class="btn btn-info text-left" href="./orders/edit/{{$order["id"]}}">Update</a>
                        </td>'.
                    '</tr>';
                }
                return Response($output);
            }
            elseif($orders->isEmpty())
            {
                return Response("<div style='margin:auto;width:100%;color:rgb(172, 4, 4);'>
                <h4>Looks like the id you entered does not exist!</h4>
              </div>");
            }
        }
    }

    public function searchCustomer(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $customers=DB::table('customers')->where('id','LIKE','%'.$request->search."%")->get();
            if(!($customers->isEmpty()))
            {
                foreach ($customers as $key => $customer) {
                    $output.='<tr>'.
                        '<th>'.$customer->id.'</th>'.
                        '<td>'.$customer->name.'</td>'.
                        '<td>'.$customer->email.'</td>'.
                        '<td>'.$customer->phone.'</td>'.
                        '<td>'.$customer->delivery_point.'</td>'.
                        '<td>'.$customer->updated_at.'</td>'.
                        '<td align="center">
                            <a class="btn btn-info text-left" href="./customers/edit/{{$order["id"]}}">Update</a>
                        </td>'.
                    '</tr>';
                }
                return Response($output);
            }
            elseif($customers->isEmpty())
            {
                return Response("<div style='margin:auto;width:100%;color:rgb(172, 4, 4);'>
                <h4>Looks like the id you entered does not exist!</h4>
              </div>");
            }
        }
    }
}
