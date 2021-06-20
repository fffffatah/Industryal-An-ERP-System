<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Employee</title>
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
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="#">New group</a></li>
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
                        <h3 class="font-width-border"><i class="fal fa-person-sign"></i>Employee information</h3>
                    </div>
                    <div class="border border-primary w-75  m-auto">
                        <form action="" class="w-50 m-auto  " >
                        
                            <div class="form-group">
                                <label>First Name</label> 
                                <input type="txt" class="form-control" id="firstname" name="fname" >
                            </div>
                            <div class="form-group">
                                <label >Last Name</label> 
                                <input type="txt" class="form-control" id="lastname" name="lname">
                            </div>
                            
                            <div class="from-group">
                                <label>Gender</label>
                                <input type="radio" name="gender" 
                                @if (isset($gender) && $gender=="male")
                                {{'checked'}} ;
                                @endif
                                value="male">Male
                                <input type="radio" name="gender" 
                                @if (isset($gender) && $gender=="female")  
                                {{'checked'}}
                                 @endif
                                value="female">Female
                            </div>
                            <div class="form-group">
                                <label>Supervisor</label>
                                <select name="supervisor" id="super" class="form-control">
                                    <option value="Superadmin">Super admin</option>
                                    <option value="HRmanager">HR manager</option>
                                    <option value="HRmanager">Product manager</option>
                                    <option value="HRmanager">Finance manager</option>
                                    <option value="HRmanager">Sales manager</option>
                                </select>
                            </div>
                            <div class="foem-group">
                                <label>Present address</label></td>
                                <input type="text" class="form-control" id="presentaddress" name="preAdd">
                            </div>
                            <div class="from-group">
                                 <label>Phone</label></td>
                                <input type="number" class="form-control" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                            </div>
                            
                            <div class="from-group">
                                <label>Job Position</label> 
                                <input type="txt" class="form-control" id="position" name="position" >
                            </div>
                            <div class="form-group">
                                <label>Hour Worked(Per week)</label> 
                                <input type="txt" class="form-control" id="worked" name="worked" >
                            </div>
                            <div class="from-group">
                                <label>Employment start date</label>
                                <input type="date" class="form-control" id="hiredate" name="hiredate">
                            </div>
                              
                            <div class="from-group">
                                <input class="btn btn-outline-primary btn-block mt-3" type="submit" value="Create employee" style="color:tomato">
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
                            <span id="year"></span>
                            Industryal</b>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
       
    
    
</body>
</html>