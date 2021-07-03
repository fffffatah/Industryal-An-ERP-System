<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\Sales\CustomersExport;
use App\Exports\Sales\OrdersExport;
use Barryvdh\DomPDF\PDF;
use Maatwebsite\Excel\Facades\Excel;

class SalesImportExportController extends Controller
{
    public function exportCustomer()
    {
        return Excel::download(new CustomersExport, 'customers.xlsx');
    }

    public function exportOrder()
    {
        return Excel::download(new OrdersExport, 'orders.xlsx');
    }

    public function exportCharts()
    {
        
    }
}
