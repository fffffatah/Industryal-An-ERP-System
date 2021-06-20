@include('finance.layouts.header')
<div style="padding-top:80px;">
    <table>
        <tr>
            <td align="center" style="padding:20px;">
                @include('finance.layouts.reportoptions')
            </td>
            <td align="center" style="padding:20px;">
            </td>
            <td align="center">
            <div class="card border-warning mb3" style="height:600px;width:1100px">
                <div class="card-header">Financial Reports</div>
                    <div class="card-body">
                        <h1 align="center" style="color:orange; font-size:80px;">Invoice Report Visualization</h1>
                    </div>
                <div class="card-footer"><a class="btn btn-info text-left" href="#"><i class="fas fa-download"></i> Download as PDF</a></div>
            </div>
            </td>
        </tr>
    </table>
</div>
@include('finance.layouts.footer')