@include('sales.layouts.header')
    <div class="row" style="max-width: 100%; overflow-x: hidden;">
      <div class="col-md-6 sticky-top">
        <div class="container">
          <div class="content" style="margin:auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header card-header-primary bg-info">
                      <h4 class="card-title"></h4>
                      <p class="card-category" style="font-size: 15px;font-weight:bold;color:rgb(5, 26, 83)">Create a New Order</p>
                    </div>
                    <div class="card-body" style="width:100%">
                      <form method="POST">
                          @csrf
                        <div class="row">
                          <div class="col-md-3">
                              <div class="form-group">
                                <label class="bmd-label-floating">Customer ID</label>
                                <input type="text" class="form-control" name="cus_id" value="" disabled>
                              </div>
                            </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="bmd-label-floating">First Purchase</label>
                              <input type="text" class="form-control" value="" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="bmd-label-floating">Order Description</label>
                              <input name="order_des" class="form-control"></input>
                              <span style="font-weight: bold" class="text-danger">{{$errors->first('order_des')}}</span>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-info">Update Order</button>
                        <div class="clearfix"></div>
                        <input type="number" name="sum_total" id="sum_total" hidden/>
                      </form>
                    </div>
                  </div>
                  <div style=" height:200px; overflow-y:scroll">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  {{-- </tr>
</table> --}}
@include('sales.layouts.footer')