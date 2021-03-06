@include('sales.layouts.header')
<div class="container">
  <div class="main-body">
        <div class="row gutters-sm">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="/upload/Users/{{$user['profile_pic']}}" alt="Admin" class="rounded-circle" width="150">
                  <div class="mt-3">
                    <h4>{{$user->firstname}} {{$user->lastname}}</h4>
                    <p class="text-secondary mb-1">Sales Manager</p>
                    <p class="text-muted font-size-sm">{{$user->address}}</p>
                    <a href="https://github.com/snigdho611/">Github</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Full Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{$user->firstname}}
                    {{$user->lastname}}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{$user->email}}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Phone</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{$user->phone}}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">username</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{$user->username}}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Address</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{$user->address}}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-12">
                    <a class="btn btn-info " href="{{route('sales.profile.edit')}}">Edit Profile</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row gutters-sm">
            </div>
          </div>
        </div>
      </div>
  </div>
@include('sales.layouts.footer')