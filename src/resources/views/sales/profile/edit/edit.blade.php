@include('sales.layouts.header')
<div style="justify-content: center; align-content:center; width:90%;">
  <div class="container">
    <div class="content" style="margin:auto">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10">
            <div class="card">
              <div class="card-header card-header-primary bg-info">
                <h4 class="card-title">Edit Profile</h4>
                <p class="card-category">Complete your profile</p>
              </div>
              <div class="card-body" style="width:100%">
                <form method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">First Name</label>
                        <input type="text" name="firstname" value="{{$user->firstname}}"  class="form-control">
                        <span style="font-weight: bold" class="text-danger">{{$errors->first('firstname')}}</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Last Name</label>
                        <input type="text" name="lastname" value="{{$user->lastname}}"  class="form-control">
                        <span style="font-weight: bold" class="text-danger">{{$errors->first('lastname')}}</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="bmd-label-floating">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                        <span style="font-weight: bold" class="text-danger">{{$errors->first('phone')}}</span>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Username</label>
                        <input type="text" name="username" value="{{$user->username}}" class="form-control">
                        <span style="font-weight: bold" class="text-danger">{{$errors->first('username')}}</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Email address</label>
                        <input type="email" name="email" value="{{$user->email}}"  class="form-control">
                        <span style="font-weight: bold" class="text-danger">{{$errors->first('email')}}</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Address</label>
                        <input type="text"  name="address" value="{{$user->address}}"class="form-control">
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