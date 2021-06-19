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
                            <a class="btn btn-info text-left" href="{{route('signup.admin')}}"><i class="fas fa-list"></i> Customer Invoices</a>
                            <a class="btn btn-info text-left" href="{{route('signup.admin')}}"><i class="fas fa-list"></i> Supplier Invoices</a>
                            <a class="btn btn-info text-left" href="{{route('signup.admin')}}"><i class="fas fa-plus"></i> New Customer Invoice</a>
                            <a class="btn btn-info text-left" href="{{route('signup.admin')}}"><i class="fas fa-plus"></i> New Supplier Invoice</a>
                        </div>
                        </table>
                    </div>
                </div>
            </td>
            <td align="center" style="padding:20px;">
            </td>
            <td align="center">
            <div class="card border-warning mb3" style="height:600px;width:1100px">
                <div class="card-header">Customer Invoices</div>
                    <div class="card-body">
                    <div class="card-body scroll-box">
                    <div class="overflow-auto">
                        <table class="table table-striped">
                            <tr>
                                <th scope="col">#SR</th>
                                <th scope="col">Date Created</th>
                                <th scope="col">Title</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Status</th>
                                <th scope="col">Details</th>
                                <th scope="col">Mail</th>
                                <th scope="col">Delete</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12/12/2047</td>
                                <td>abcd</td>
                                <td>John</td>
                                <td>Adjusted</td>
                                <td><a class="btn btn-outline-primary" href="">Details</a></td>
                                <td><a class="btn btn-outline-info" href="">Mail</a></td>
                                <td><a class="btn btn-outline-danger" href="">Delete</a></td>
                            </tr>
                        </table>
                    </div>
                    </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>
@include('finance.layouts.footer');