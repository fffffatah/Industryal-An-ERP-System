@include('sales.layouts.header')
<table class="table table-hover table-bordered" style="width: 80%" align="center">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact Number</th>
        <th scope="col">First Purchase</th>
      </tr>
    </thead>
    <tbody>
      @foreach($customers as $customer)
      <tr>
        <th scope="row">{{$customer->id}}</th>
        <td scope="row">{{$customer->name}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->phone}}</td>
        <td>{{$customer->first_purchase}}</td>
        <td align="center">
          <a class="btn btn-info text-left" href="./mail/send/{{$customer['id']}}">Mail Customer</a>
        </td>
        <td align="center">
          <a class="btn btn-info text-left" href="./customers/update/{{$customer['id']}}">Update</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@include('sales.layouts.footer')