<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   
</head>
<body>
    <div class="container-fluid">
        <header class="border bg-dark m-0 p-1 fixed-top">
            <div class="row">
                <div class="col-9 ">
                    <h1 class="text-white"><i>Industryal</i></h1>
                </div>
                
                <div class="col-lg-3 ">
                    <ul class="nav justify-content-center ">
                        <li class="nav-item"><a class="nav-link text-white btn btn-outline-primary btn-block  mt-2" href="{{route('HRhome.index')}}"><i class="fas fa-home"></i>Home</a></li>
                        <span style="padding-right:7px;"></span>
                        <li class="nav-item"><a class="nav-link text-white btn btn-outline-primary btn-block  mt-2" href="{{route('HRuserProfile.details')}}"><i class="fas fa-user"></i>Profile</a></li>
                        <span style="padding-right:7px;"></span>
                        <li class="nav-item"><a class="nav-link text-white btn btn-outline-primary btn-block mt-2" href="{{route('HRuserProfile.logout')}}"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </header>
    </div>    
    <br><br><br>
        <div class="row">
            <div class="col-2" >
                <nav class=" navbar border-dark w-25">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRuser.create')}}">New user</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRuser.index')}}">User List</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRemployee.create')}}">New Employee</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRgroup.index')}}">Add group</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRemployee.emplist')}}">Employee List</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HREmpSchedule.schedule')}}">Schedules</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRLeave.leave')}}">Leave Request</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRLeave.leaveList')}}">Leave Request List</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRexpense.report')}}">Expense Report</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRexpenseList.list')}}"> Expense  Report List</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRExStatistic.statistic')}}">Expense Statistic</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRpayroll.show')}}">Payroll</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-10">
                <h1 class="text-center"><i class="fas fa-address-book"></i>User List</h1>
                <hr class="mb-4">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Find By Name...">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-outline-secondary">Search &nbsp <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <br>
                    <table  class="table table-hover ">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>User Name</th>
                        <th>Gender</th>
                        <th>User Type</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Job Position</th>
                        <th>profile Pic</th>
                        <th>Employment Start date</th>
                        <th>Action</th>
                        @foreach($userList as $user)
                        <tr>
                            <td>{{$user['firstname']}}</td>
                            <td>{{$user['lastname']}}</td>
                            <td>{{$user['username']}}</td>
                            <td>{{$user['gender']}}</td>
                            <td>{{$user['type']}}</td>
                            <td>{{$user['address']}}</td>
                            <td>{{$user['phone']}}</td>
                            <td>{{$user['email']}}</td>
                            <td>{{$user['position']}}</td>
                            <td>
                                <img src="/upload/HR/{{$user['profile_pic']}}" alt="Profile" width="100" height="100"> 
                                </td>
                            <td>{{$user['created_at']}}</td>
                            
                            <td>
                                <a href="#" class="btn btn-success m-1"> Update </a>
                                <a href="#" class="btn btn-danger m-1"> Delete </a>
                           
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    
        
           </div>
            
        </div>
        <footer id="main-footer" class="bg-primary text-white mt-5 p-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="lead text-center">
                            Copyright &copy;
                            <span >2021</span>
                            Industryal
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    <!-- Footer Ends -->    
       
    
    
</body>
</html>