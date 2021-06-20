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
                <div class="card-header">Budgeting - Connect New Bank</div>
                    <div class="card-body">
                        
                    </div>
                <div class="card-header"><a class="btn btn-info text-left" href="#"><i class="fas fa-plug"></i> Connect</a></div>
                </div>
            </td>
        </tr>
    </table>
</div>
@include('finance.layouts.footer')