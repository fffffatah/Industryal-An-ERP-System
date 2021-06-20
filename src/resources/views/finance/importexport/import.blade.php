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
                <div class="card-header">Import</div>
                    <div class="card-body">
                        <h2 align="center" style="color:green; font-size:20px;">Select a valid CSV/XML file:</h2>
                        <input class="form-control" type="file" name="importfile" id="importfile" accept="*/*"><span id="err_pp" style="color:red;"></span>
                    </div>
                    <div class="card-footer"><a class="btn btn-info text-left" href="#"><i class="fas fa-upload"></i> Import</a></div>
                </div>
            </td>
        </tr>
    </table>
</div>
@include('finance.layouts.footer')