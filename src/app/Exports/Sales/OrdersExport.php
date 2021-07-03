<?php

namespace App\Exports\Sales;

use App\Models\Sales\CustomerModel;
use App\Models\Sales\OrderModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class OrdersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OrderModel::all();
    }
}
