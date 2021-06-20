@include('finance.layouts.header')
<div style="padding-top:80px;">
    <table>
        <tr>
            <td align="center" style="padding:20px;">
                @include('finance.layouts.invoiceoptions')
            </td>
            <td align="center" style="padding:20px;">
            </td>
            <td align="center">
            <div class="card border-warning mb3" style="height:600px;width:1100px">
                <div class="card-header">New Customer Invoice</div>
                <div class="card-body scroll-box">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <td align="left" style="padding-bottom:10px;">Title: </td>
                                <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="title" id="title" placeholder="" value=""><span id="err_fullname" style="color:red;"></span></td>
                            </tr>
                            <tr>
                                <td align="left" style="padding-bottom:10px;">Supplier Name: </td>
                                <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="customername" id="customername" placeholder="" value=""><span id="err_fullname" style="color:red;"></span></td>
                            </tr>
                            <tr>
                                <td align="left" style="padding-bottom:10px;">Date: </td>
                                <td align="left" style="padding-bottom:10px;"><input class="form-control" type="date" name="invoicedate" id="invoicedate"><span id="err_dob" style="color:red;"></span></td>
                            </tr>
                        </table>
                    </div>
                    </div>
                <div class="card-footer"><a class="btn btn-info text-left" href="#"><i class="fas fa-pen"></i> Adjust & Create</a> <a class="btn btn-info text-left" href="#"><i class="fas fa-plus"></i> Create</a></div>
            </div>
            </td>
        </tr>
    </table>
</div>
@include('finance.layouts.footer')