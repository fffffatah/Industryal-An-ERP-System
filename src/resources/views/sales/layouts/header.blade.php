<!DOCTYPE html>
<html lang="en">
<head>
    <title>Industryal - Finance & Accounting</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top dropshadow">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="navbar-brand">
                <img src="{{asset('assets/industryal-favicon.png')}}" height="50px" width="60px">
            </div>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{route('finance.dashboard.index')}}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('finance.invoice.index')}}">Invoice</a></li>
                    <li class="nav-item"><a class="nav-link" href="lawyer_clients.php">Payments</a></li>
                    <li class="nav-item"><a class="nav-link" href="lawyer_meetings.php">Reports</a></li>
                    <li class="nav-item"><a class="nav-link" href="lawyer_reports.php">Budgeting</a></li>
                    <li class="nav-item"><a class="nav-link" href="lawyer_payments.php">Leave Request</a></li>
                    <li class="nav-item"><a class="nav-link" href="lawyer_chats.php">Chats</a></li>
                    <li class="nav-item"><a class="nav-link" href="lawyer_reviews.php">Import/Export</a></li>
                </ul>
            <div class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-outline-info" href="lawyer_profile.php" style="color:rgb(209, 179, 248);">
                        <i class="fas fa-address-card"></i>
                        Profile
                    </a>
                </li>
                <span style="padding-right:5px;"></span>
                <li class="nav-item"><a class="btn btn-outline-danger" href="{{route('signin.index')}}" style="color:white;"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </div>
            
        </div>
    </nav>
</body>
</html>
