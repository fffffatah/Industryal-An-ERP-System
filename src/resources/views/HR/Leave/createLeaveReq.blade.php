<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave request</title>
   <!--  Bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   
</head>
<body>
    <div class="container-fluid">
        <header class="border bg-dark m-0 p-1 fixed-top">
            <div class="row">
                <div class="col-9 ">
                    <h1 class="text-white  ">Industryal</h1>
                </div>
                
                <div class=" col-lg-3  ">
                    <ul class="nav justify-content-center ">
                        <li class="nav-item"><a class="nav-link text-white btn btn-outline-primary btn-block  mt-2 "href="#"><i class="fas fa-user"></i>Profile</a></li>
                        <span style="padding-right:7px;"></span>
                        <li class="nav-item"><a class="nav-link text-white btn btn-outline-primary btn-block mt-2" href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
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
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="#">Search User</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRuser.index')}}">User List</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRemployee.create')}}">New Employee</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRgroup.index')}}">Add group</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRLeave.leave')}}">Create Leave Request</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRexpense.report')}}">Create Expense Report</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRexpenseList.list')}}"> Expense  Report List</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRExStatistic.statistic')}}">Expense Statistic</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="{{route('HRpayroll.show')}}">Payroll</a></li>

                    </ul>
                </nav>
            </div>
            <div class="col-10">
                <div class="info-section p-3 text-black my-5">
                    <div class="title text-center mb-3">
                        <h3 class="font-width-border"><i class="fal fa-house-leave"></i>Leave Request</h3>
                    </div>
                    <div class="border border-primary w-75   m-auto">
                        <form action="" class="w-50 m-auto  " >
                        
                            <div class="form-group">
                                <label>User</label>
                                <select name="User" id="super" class="form-control">
                                    <option value="HRmanager">HR manager</option>
                                </select>
                            </div>
                            
                            
                            <div class="form-group">
                                <label>Type</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="sick">Sick Leave</option>
                                    <option value="other">Other leave</option>
                                </select>
                            </div>
                            
                            
                            
                            <div class="from-group">
                                <label>Start date</label>
                                <input type="date" class="form-control" id="startdate" name="startdate">
                            </div>
                            <div class="from-group">
                                <label>End date</label>
                                <input type="date" class="form-control" id="startdate" name="startdate">
                            </div>
                            <div class="form-group">
                                <label>Approved by</label>
                                <select name="approve" id="approve" class="form-control">
                                    <option value="Super">Super Admin</option>
                                    <option value="Hrmanager">HR manager</option>
                                </select>
                            </div>
                              
                            <div class="from-group">
                                <input class="btn btn-outline-primary btn-block mt-3" type="submit" value="Create Leave Request" style="color:tomato">
                            </div>
                             
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer id="main-footer" class="bg-primary text-white mt-5 p-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="lead text-center"><b>
                            Copyright &copy;
                            <span >2021</span>
                            Industryal</b>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
       
    
    
</body>
</html>