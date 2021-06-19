@include('finance.layouts.header');
<div style="padding-top:80px;">
    <table>
        <tr>
            <td align="center" style="padding:20px;">
            <div class="card border-warning mb3" style="height:600px;width:250px">
                <div class="card-header">Invoice Options</div>
                    <div class="card-body">
                        <table align="left">
                        <div class="btn-group-vertical">
                            <a class="btn btn-info text-left" href="{{route('finance.invoice.listcustomer')}}"><i class="fas fa-list"></i> Customer Invoices</a>
                            <a class="btn btn-info text-left" href="{{route('finance.invoice.listsupplier')}}"><i class="fas fa-list"></i> Supplier Invoices</a>
                            <a class="btn btn-info text-left" href="{{route('finance.invoice.customer')}}"><i class="fas fa-plus"></i> New Customer Invoice</a>
                            <a class="btn btn-info text-left" href="{{route('finance.invoice.supplier')}}"><i class="fas fa-plus"></i> New Supplier Invoice</a>
                        </div>
                        </table>
                    </div>
                </div>
            </td>
            <td align="center" style="padding:20px;">
            </td>
            <td align="center">
            <div class="card border-warning mb3" style="height:600px;width:1100px">
                <div class="card-header">New Supplier Invoice</div>
                    <div class="card-body">
                        <h1 align="center" style="color:orange; font-size:80px;">Select from Options</h1>
                    </div>
                <div class="card-footer"><a class="btn btn-info text-left" href="#"><i class="fas fa-pen"></i> Adjust & Create</a> <a class="btn btn-info text-left" href="#"><i class="fas fa-plus"></i> Create</a></div>
            </div>
            </td>
        </tr>
    </table>
</div>
@include('finance.layouts.footer');