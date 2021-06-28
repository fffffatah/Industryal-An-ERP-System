@include('sales.layouts.header')
<table class="table table-hover table-bordered" style="width: 80%" align="center">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact Number</th>
      </tr>
    </thead>
    <tbody>
      @for($i=0;$i<3;$i++)
      <tr>
        <th scope="row">3</th>
        <td scope="row">Peter Parker</td>
        <td>new.yorker@gmail.com</td>
        <td>+1 NXX-NXX-XXXX</td>
        <td align="center">
          <a class="btn btn-info text-left" href="{{route('sales.customers.mail.send')}}">Mail Customer</a>
        </td>
      </tr>
      @endfor
    </tbody>
  </table>
@include('sales.layouts.footer')