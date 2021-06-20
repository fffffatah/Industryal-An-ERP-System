@include('finance.layouts.header')
<div style="padding-top:80px;">
    <table>
        <tr>
            <td align="center" style="padding:20px;">
                @include('finance.layouts.leaverequestoptions')
            </td>
            <td align="center" style="padding:20px;">
            </td>
            <td align="center">
            <div class="card border-warning mb3" style="height:600px;width:1100px">
                <div class="card-header">My Leave-Requests</div>
                <div class="card-body scroll-box">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th scope="col">#SR</th>
                                <th scope="col">Date</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12/12/2047</td>
                                <td>abcd</td>
                                <td>Approved</td>
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