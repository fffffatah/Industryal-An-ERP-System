<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sales & Marketing</title>
    <link rel="stylesheet" href="{{ url('css/sales/bootstrap/bootstrap.css') }}"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top dropshadow">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="navbar-brand">
                <img src="{{asset('assets/industryal-favicon.png')}}" height="50px" width="60px">
            </div>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('finance.dashboard.index')}}">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('finance.invoice.index')}}">
                            Invoice
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lawyer_clients.php">
                            Payments
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lawyer_meetings.php">
                            Reports
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="lawyer_reports.php">Budgeting</a></li>
                    <li class="nav-item"><a class="nav-link" href="lawyer_payments.php">Leave Request</a></li>
                    <li class="nav-item"><a class="nav-link" href="lawyer_chats.php">Chats</a></li>
                    <li class="nav-item"><a class="nav-link" href="lawyer_reviews.php">Import/Export</a></li>
                </ul>
            <div class="navbar-nav ml-auto">
                <li class="nav-item"><a class="btn btn-outline-info" href="lawyer_profile.php" style="color:white;"><i class="fas fa-address-card"></i> Profile</a></li>
                <span style="padding-right:5px;"></span>
                <li class="nav-item"><a class="btn btn-outline-danger" href="{{route('signin.index')}}" style="color:white;"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </div>
        </div>
    </nav>
    <script src="{{ url('js/sales/bootstrap/bootstrap.js')}}"></script>
</body>
</html>