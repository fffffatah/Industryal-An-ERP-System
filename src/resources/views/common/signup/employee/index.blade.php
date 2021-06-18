<html>
    <head>
        <title>Industryal - Employee Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../styles/lawyer_styles.css">
        <link rel="shortcut icon" href="{{ asset('assets/industryal-favicon.png') }}">
    </head>
    <body>
        <center>
            <form action="" method="POST" enctype="multipart/form-data" style="padding:20px;">
            @csrf
                <table>
                    <tr>
                        <td style="padding:20px;"><img src="{{ asset('assets/industryal-logo.png') }}"; width="380" height="480"></td>
                        <td align="center">
                            <div class="card border-success mb3">
                                <div class="card-header">Register as Employee</div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Refer Code: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="refer" id="refer" placeholder="Admin's Referral Code" value=""><span id="err-refer" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Profile Picture: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="file" name="pp" id="pp" accept="image/*"><span id="err-pp" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Full Name: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="fullname" id="fullname" placeholder="Full Name" value=""><span id="err-fullname" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">User Name: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="username" id="username" placeholder="User Name" value=""><span id="err-username" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Email: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="email" id="email" placeholder="Email" value=""><span id="err-email" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Phone: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="number" name="phone" id="phone" placeholder="Phone Number" value=""><span id="err-phone" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Password: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="password" name="pass" id="pass" placeholder="Password"><span id="err-pass" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Confirm Password: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="password" name="cpass" id="cpass" placeholder="Confirm Password"><span id="err-cpass" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">NID: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="number" name="nid" id="nid" placeholder="NID" value=""><span id="err-nid" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Birthday: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="date" name="dob" id="dob"><span id="err-dob" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Gender: </td>
                                            <td align="left" style="padding-bottom:10px;">
                                                <input type="radio" name="gender" id="gender-male" value="Male"> Male
                                                <input type="radio" name="gender" id="gender-female" value="Female"> Female
                                                <span id="err-gender" style="color:red;"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Address: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="address" id="address" placeholder="Address" value=""><span id="err-address" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">City: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="city" id="city" placeholder="City" value=""><span id="err-city" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">State: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="state" id="state" placeholder="State" value=""><span id="err-state" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Zip/Postal: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="zip" id="zip" placeholder="Postal/Zip-Code" value=""><span id="err-zip" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-bottom:20px;" colspan="2" align="center"><a href="{{route('signin.index')}}"><U>Already registered! Go to login.</U></a></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><input class="btn btn-outline-success" type="submit" name="reg-button" value="Register"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>