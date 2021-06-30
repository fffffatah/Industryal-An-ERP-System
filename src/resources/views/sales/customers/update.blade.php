@include('sales.layouts.header')
<div style="justify-content: center; align-content:center; width:90%;">
    {{-- <p>{{$customer['name']}}</p> --}}
  <div class="container">
    <div class="content" style="margin:auto">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10">
            <div class="card">
              <div class="card-header card-header-primary bg-info">
                <h4 class="card-title">{{$customer['name']}}</h4>
                <p class="card-category">Update Customer's Profile</p>
              </div>
              <div class="card-body" style="width:100%">
                <form>
                  <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID</label>
                          <input type="text" class="form-control" value={{$customer['id']}} disabled>
                        </div>
                      </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="bmd-label-floating">Full Name</label>
                        <input type="text" class="form-control" value="{{$customer['name']}}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">First Purchase</label>
                        <input type="email" class="form-control" value="{{$customer['first_purchase']}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Phone Number</label>
                        <input type="text" class="form-control" value="{{$customer['phone']}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Email address</label>
                        <input type="text" class="form-control" value="{{$customer['email']}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Delivery To</label>
                        <textarea rows="3" class="form-control">{{$customer['delivery_point']}}</textarea>
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
@include('sales.layouts.footer')