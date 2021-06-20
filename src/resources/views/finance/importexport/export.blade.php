@include('finance.layouts.header')
<div style="padding-top:80px;">
    <table>
        <tr>
            <td align="center" style="padding:20px;">
                @include('finance.layouts.importexportoptions')
            </td>
            <td align="center" style="padding:20px;">
            </td>
            <td align="center">
            <div class="card border-warning mb3" style="height:600px;width:1100px">
                <div class="card-header">Export</div>
                    <div class="card-body">
                        <h1 align="center" style="color:green; font-size:20px;">Select data that you want to export</h1><br><br>
                        <table>
                            <tr>
                                <th><input type="checkbox" id="invoiceexport" name="invoiceexport" value=""><label for="invoiceexport">  Invoice</label></th>
                            </tr>
                            <tr>
                                <th><input type="checkbox" id="paymentexport" name="paymentexport" value=""><label for="paymentexport"> Payments</label></th>
                            </tr>
                            <tr>
                                <th><input type="checkbox" id="reporthistoryexport" name="reporthistoryexport" value=""><label for="reporthistoryexport"> Report Generation History</label></th>
                            </tr>
                            <tr>
                                <th><input type="checkbox" id="budgetingexport" name="budgetingexport" value=""><label for="budgetingexport"> Budgeting</label></th>
                            </tr>
                            <tr>
                                <th><input type="checkbox" id="myleavereqexport" name="myleavereqexport" value=""><label for="myleavereqexport"> My Leave-Request</label></th>
                            </tr>
                            <tr>
                                <th><input type="checkbox" id="historyexport" name="historyexport" value=""><label for="historyexport"> Import/Export History</label></th>
                            </tr>
                        </table>
                    </div>
                <div class="card-footer"><a class="btn btn-info text-left" href="#"><i class="fas fa-download"></i> Export as CSV</a> <a class="btn btn-info text-left" href="#"><i class="fas fa-download"></i> Export as XML</a></div>
                </div>
            </td>
        </tr>
    </table>
</div>
@include('finance.layouts.footer')