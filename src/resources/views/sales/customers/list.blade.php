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
      <tr>
        <th scope="row">1</th>
        <td>Tony Stark</td>
        <td>tony.stark@gmail.com</td>
        <td>+1 NXX-NXX-XXXX</td>
        <td align="center"><button type="button" class="btn btn-info" onclick="document.location='{{route('sales.customers.send')}}'">Mail Customer</button>

      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Bruce Wayne</td>
        <td>batman@gmail.com</td>
        <td>+1 NXX-NXX-XXXX</td>
        <td align="center"><button type="button" class="btn btn-info" onclick="document.location='{{route('sales.customers.send')}}'">Mail Customer</button>

      </tr>
      <tr>
        <th scope="row">3</th>
        <td scope="row">Peter Parker</td>
        <td>new.yorker@gmail.com</td>
        <td>+1 NXX-NXX-XXXX</td>
        <td align="center"><button type="button" class="btn btn-info" onclick="document.location='{{route('sales.customers.send')}}'">Mail Customer</button>
        </td>
      </tr>
    </tbody>
  </table>
@include('sales.layouts.footer')