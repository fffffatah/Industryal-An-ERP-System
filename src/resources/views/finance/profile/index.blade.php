@include('finance.layouts.header')
<center>
<table>
    <tr>
        <td style="padding-top:100px;">
        <div class="card" style="height:600px;width:600px;">
            <img class="card-img-top" src="{{ asset('assets/industryal-logo.png') }}" alt="Card image cap" style="height:100px;width:100px">
            <div class="card-body">
                <h5 class="card-title">John Doe</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Username: John Doe</li>
                <li class="list-group-item">Email: bcd@def.com</li>
                <li class="list-group-item">Phone: 1234567</li>
                <li class="list-group-item">NID: 12345</li>
                <li class="list-group-item">Address: abcd</li>
                <li class="list-group-item">State: efgh</li>
                <li class="list-group-item">City: ijkl</li>
                <li class="list-group-item">ZIP Code: 1234</li>
                <li class="list-group-item">Date of Birth: 03/12/1999</li>
            </ul>
        </div>
        </td>
        <td style="padding-top:100px;">
        <form action="" method="POST" enctype="multipart/form-data" style="padding:20px;">
                <table>
                    <tr>
                        <td align="center">
                            <div class="card border-success mb3 dropshadow">
                                <div class="card-header">Update Profile</div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Profile Picture: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="file" name="pp" id="pp" accept="image/*"><span id="err_pp" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Full Name: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="fullname" id="fullname" placeholder="Full Name" value=""><span id="err_fullname" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Birthday: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="date" name="dob" id="dob"><span id="err_dob" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Address: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="address" id="address" placeholder="Address" value=""><span id="err_address" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">City: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="city" id="city" placeholder="City" value=""><span id="err_city" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">State: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="state" id="state" placeholder="State" value=""><span id="err_state" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Zip/Postal: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="zip" id="zip" placeholder="Postal/Zip-Code" value=""><span id="err_zip" style="color:red;"></span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><input class="btn btn-outline-success" type="submit" name="update_button" value="Update"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>
</center>
@include('finance.layouts.footer')