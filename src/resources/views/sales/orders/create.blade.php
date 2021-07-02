@include('sales.layouts.header')
{{-- <table border="1px">
  <tr> --}}
    <div class="row">
      <div class="col-md-6 sticky-top">
        <div class="container">
          <div class="content" style="margin:auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header card-header-primary bg-info">
                      <h4 class="card-title"></h4>
                      <p class="card-category" style="font-size: 20px;font-weight:bold;color:rgb(5, 26, 83)">Create a New Order</p>
                    </div>
                    <div class="card-body" style="width:100%">
                      <form method="POST">
                          @csrf
                        <div class="row">
                          <div class="col-md-3">
                              <div class="form-group">
                                <label class="bmd-label-floating">ID</label>
                                <input type="text" class="form-control" name="cus_id" value={{$id}} disabled>
                              </div>
                            </div>
                          <div class="col-md-5">
                            <div class="form-group">
                              <label class="bmd-label-floating">Full Name</label>
                              <input type="text" class="form-control" name="cus_name" value="">
                              <span style="font-weight: bold" class="text-danger">{{$errors->first('cus_name')}}</span>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="bmd-label-floating">First Purchase</label>
                              <input type="text" class="form-control" value="{{$first_purchase}}" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Phone Number</label>
                              <input type="text" class="form-control" name="cus_phone" value="">
                              <span style="font-weight: bold" class="text-danger">{{$errors->first('cus_phone')}}</span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Email address</label>
                              <input type="text" class="form-control" name="cus_email" value="">
                              <span style="font-weight: bold" class="text-danger">{{$errors->first('cus_email')}}</span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="bmd-label-floating">Delivery To</label>
                              <textarea rows="3"name="order_description" class="form-control"></textarea>
                              <span style="font-weight: bold" class="text-danger">{{$errors->first('cus_del')}}</span>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-info">Update Profile</button>
                        <button type="button" class="btn btn-info" onclick="document.location='{{route('sales.profile.edit.password')}}'">Change Password</button>
                        <div class="clearfix"></div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6" style="width:500px;">
        <table class="table table-hover table-bordered" style="width: 100%" align="center">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Product</th>
              <th scope="col">Description</th>
              <th scope="col">Price(BDT)</th>
              <th scope="col">Status</th>
              <th scope="col">Delivered On</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $key => $product)
            <tr>
              <tr>
                <th scope="row">{{$product->product_id}}</th>
                <td scope="row">{{$product->product_name}}</td>
                <td>{{$product->selling_price}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->warehouse_name}}</td>
                <td align="center">
                  <a class="btn btn-info text-left" href="#">Update</a>
                </td>
              </tr>
            </tr>
            @endforeach
            @for($i = 0; $i < 100; $i++)
              <tr>
                <td>x</td>
              </td>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
  {{-- </tr>
</table> --}}
@include('sales.layouts.footer')