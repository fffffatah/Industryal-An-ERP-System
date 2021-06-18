<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
   
</head>
<body>
    <div class="container-fluid">
        <header class="border bg-dark m-0 p-1 fixed-top">
            <div class="row">
                <div class="col-9 ">
                    <h1 class="text-white  ">Industryal</h1>
                </div>
                
                <div class="col-lg-3 ">
                    <ul class="nav justify-content-center ">
                        <li class="nav-item"><a class="nav-link text-white btn btn-outline-primary btn-block mt-2"href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-white btn btn-outline-primary btn-block mt-2" href="#">Logout</a></li>
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
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="#">New Employee</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="#">New group</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="#">Create Expense Report</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-block mt-2" href="#">List Expense  Report</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-10">
                <h1 class="text-center">Chart</h1>
        
           </div>
            
        </div>
       
    
    
</body>
</html>