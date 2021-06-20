@include('finance.layouts.header')
<div style="padding-top:80px;">
    <table>
        <tr>
            <td align="center" style="padding:20px;">
                @include('finance.layouts.budgetingoptions')
            </td>
            <td align="center" style="padding:20px;">
            </td>
            <td align="center">
            <div class="card border-warning mb3" style="height:600px;width:1100px">
                <div class="card-header">Budgeting - Connected Banks</div>
                <div class="card-body scroll-box">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th scope="col">#SR</th>
                                <th scope="col">Date Connected</th>
                                <th scope="col">Name</th>
                                <th scope="col">Details</th>
                                <th scope="col">Disconnect</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12/12/2047</td>
                                <td>abcd</td>
                                <td><a class="btn btn-outline-primary" href="">Details</a></td>
                                <td><a class="btn btn-outline-danger" href="">Disconnect</a></td>
                            </tr>
                        </table>
                    </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>
@include('finance.layouts.footer')