@include('sales.layouts.header')
<div style="width:100%;padding-left:120px;">
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
        <h3>Search for Order:</h3>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <input type="text" style="width:500px;" class="form-controller" id="search" name="search" placeholder="Enter order ID"></input>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<span align="center" style="font-weight: bold;padding-left:150px;" class="text-success">{{session('successful')}}</span>
<div style="float:right;padding-right:138px;padding-bottom:15px">
  <a class="btn btn-info text-left" href="customers/export">Download as Excel</a>
</div>
<table class="table table-hover table-bordered" style="width: 80%" align="center">
  {{-- <script>
    var something = {{$customers}};
  </script> --}}
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact Number</th>
        <th scope="col">First Purchase</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      {{-- <?php print_r(gettype($customers)); ?> --}}
      @foreach($customers as $customer)
      <tr>
        <th scope="row">{{$customer['id']}}</th>
        <td scope="row">{{$customer['name']}}</td>
        <td>{{$customer['email']}}</td>
        <td>{{$customer['phone']}}</td>
        <td>{{$customer['first_purchase']}}</td>
        <td align="center">
          <a class="btn btn-info text-left" href="../mail/send/{{$customer['id']}}">Mail Customer</a>
        </td>
        <td align="center">
          <a class="btn btn-info text-left" href="./update/{{$customer['id']}}">Update</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <script type="text/javascript">
    $('#search').on('keyup',function(){
      $value=$(this).val();
      $.ajax({
          type : 'get',
          url : '{{URL::to('sales/customers/list/search')}}',
          data:{'search':$value},
          success:function(data){
          $('tbody').html(data);
        }
      });
    })
    </script>
@include('sales.layouts.footer')