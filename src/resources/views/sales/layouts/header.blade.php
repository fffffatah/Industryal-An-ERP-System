<!DOCTYPE html>
<html lang="en">
<head>
    <title>Industryal - Finance & Accounting</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}">
    <link rel="icon" href="{{url('assets/industryal-logo.png')}}">
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
                <li class="nav-item dropdown">
                    {{-- <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-address-card"></i>
                        [[Insert Name]]
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">A</a>
                        <a href="#" class="dropdown-item">B</a>
                        <a href="#" class="dropdown-item">C</a>
                    </div> --}}
                    <!-- Example split danger button -->
                    <div class="btn-group" style="padding-right: 20px">
                        <button type="button" class="btn btn-outline-secondary">Action</button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Edit Profile</a>
                        <a class="dropdown-item" href="#">Deactivate Account</a>
                        <a class="dropdown-item" href="#">Log Out</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </li>
                
                <span style="padding-right:5px;"></span>
                <li class="nav-item"><a class="btn btn-outline-danger" href="{{route('signin.index')}}" style="color:white;"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </div>
            
        </div>
    </nav>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script> --}}
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
