@include('sales.layouts.header')
<div class="float-left>
  <div class="container">
    <div class="content" style="margin:auto">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-primary bg-info">
                <h4 class="card-title">Edit Profile</h4>
                <p class="card-category">Complete your profile</p>
              </div>
              <div class="card-body" style="width:100%">
                <form>
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="bmd-label-floating">Company (disabled)</label>
                        <input type="text" class="form-control" disabled>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Username</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Email address</label>
                        <input type="email" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Fist Name</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Last Name</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Adress</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">City</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Country</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Postal Code</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <div class="form-group">
                          <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                          <textarea class="form-control" rows="5"></textarea>
                        </div>
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