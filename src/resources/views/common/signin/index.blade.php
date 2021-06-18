<html>
    <head>
        <title>Industryal - ERP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="shortcut icon" href="{{ asset('assets/industryal-favicon.png') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}">
    </head>
    <body>
        <center>
            <form action="" method="POST">
            @csrf
                <table>
                    <tr>
                        <td style="padding:20px;"><img src="{{ asset('assets/industryal-logo.png') }}"; width="300" height="400"></td>
                        <td align="center" style="padding:20px;">
                            <div class="card border-success mb3 dropshadow" style="height:350px;width:250px">
                                <div class="card-header">Login</div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="padding-bottom:10px;"><input class="form-control" type="text" name="email" id="email" placeholder="Email" value=""><span id="err-login-email" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-bottom:20px;"><input class="form-control" type="password" name="pass" id="pass" placeholder="Password"><span id="err-login-pass" style="color:red;"></span></td>
                                        </tr>
                                    </table>
                                    <a href="forgot_pass.php">Forgot password?</a><br><br>
                                    <input class="btn btn-success" type="submit" name="login-button" value="Login">
                                </div>
                            </div>
                        </td>
                        <td align="center" style="padding:20px;">
                            <div class="card border-success mb3 dropshadow" style="height:350px;width:250px">
                                <div class="card-header">Signup</div>
                                <div class="card-body">
                                    <div class="btn-group-vertical">
                                        <a class="btn btn-info text-left" href="{{route('signup.admin')}}"><i class="fas fa-user"></i> As Admin</a>
                                        <a class="btn btn-info text-left" href="{{route('signup.employee')}}"><i class="fas fa-users"></i> As Employee</a><!--ADD YOUR HYPERLINK-->
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>