@extends('admin_layout.admin')
@section('content')
    
  
  <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ordes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ordes</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Ordes</h3>
              </div>

              @if (Session::has('error'))
                  <div class="alert alert-danger">
                    {{Session::get('error')}}
                  </div>
              @endif
              
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Date</th>
                    <th>Address</th>
                    <th>Client Names</th>
                    <th>Orders</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
                      <tr>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->name}}</td>
                        <td>
                          @foreach ($order->cart->items as $item)
                              {{$item['product_name'].', '}}
                          @endforeach
                        </td>
                        <td>
                          <a href="{{url('/viewpdforder/'.$order->id)}}" class="btn btn-primary"><i class="nav-icon fas fa-eye"></i></a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Date</th>
                    <th>Address</th>
                    <th>Client Names</th>
                    <th>Orders</th>
                    <th>Actions</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
             
            </div>
            
          </div>
          
        </div>
        
      </div>
      
    </section>
    
  </div>
 
@endsection

@section('style')
    <!-- DataTables -->
  <link rel="stylesheet" href="back-end/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
@endsection


@section('scripts')
    <!-- DataTables -->
    <script src="back-end/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="back-end/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="back-end/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="back-end/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="back-end/dist/js/adminlte.min.js"></script>

    <script src="back-end/dist/js/bootbox.min.js"></script>
<!-- page script -->

<script>
  $(document).on("click", "#delete", function(e){
  e.preventDefault();
  var link = $(this).attr("href");
  bootbox.confirm("Do you really want to delete this element ?", function(confirmed){
    if (confirmed){
        window.location.href = link;
      };
    });
  });
</script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection