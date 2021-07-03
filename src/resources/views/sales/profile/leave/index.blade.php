@include('sales.layouts.header')
<body>
    <!-- Header Starts -->
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-2">
            <div class="container">
            <a href="{{route('productHome.index')}}" class="navbar-brand">Industryal</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-3">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-user"></i> &nbsp {{session('username')}}
                    </a>
                    <div class="dropdown-menu mt-2 ml-3 bg-light">
                    <a href="{{route('userProfile.index')}}" class="dropdown-item">
                        <i class="fas fa-user-circle"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user.logout')}}" class="nav-link">
                    <i class="fas fa-user-times"></i> Logout
                    </a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>
    <!-- Header Ends -->

    <!-- Main Body Starts -->
    <br><br><br>
    <main id="main ">
        <div class="">
            <div class="row mt-2 justify-content-around">
                        <div class="container">
                            <div class="row justify-content-center">
                                <h3> <i class="fas fa-walking"></i> &nbsp New Leave Request</h3>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="container">
                            <div class="row justify-content-center mb-2">
                                @if(session('msg'))
                                <span class="alert alert-success">{{session('msg')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-start mb-2">
                            <div class="col">
                            </div>
                            <div class="col-8"> 
                            </div>
                            <div class="col">
                                    <a href="{{route('myLeave.index')}}" class="btn btn-secondary rounded p-1 text-right">My Leave List</a>
                            </div>
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <form method="POST">
                                    @csrf
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <td clospan="3">Type</td>
                                            <td clospan="3">
                                                <select class="form-control" name="leave_type">
                                                    <option>Sick leave</option>
                                                    <option>Other leave</option>
                                                </select> 
                                                <span class="text-danger">{{$errors->first('leave_type')}}</span> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td clospan="3">Start date</td>
                                            <td clospan="3">
                                                <input type="date" class="form-control" name="leave_start_date" value="{{old('leave_start_date')}}">  
                                                <span class="text-danger">{{$errors->first('leave_start_date')}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td clospan="3">End date</td>
                                            <td clospan="3">
                                                <input type="date" class="form-control" name="leave_end_date" value="{{old('leave_end_date')}}">
                                                <span class="text-danger">{{$errors->first('leave_end_date')}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td clospan="3">Description</td>
                                            <td colspan="3">
                                                <textarea type="text" name="leave_description" id="" class="form-control">{{old('leave_description')}}</textarea>
                                                <span class="text-danger">{{$errors->first('leave_description')}}</span>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" align="center" ><input type="submit" class="btn btn-success" value="Request" style="width:400px"></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </main>
    <!-- Main Body Ends -->
@include('sales.layouts.footer')
