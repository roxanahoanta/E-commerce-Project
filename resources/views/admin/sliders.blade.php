@extends('admin_layout.admin')

@section('content')
     
     {{Form::hidden('', $increment = 1)}}
  <div class="content-wrapper">
   
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sliders</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sliders</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Sliders</h3>
              </div>
              @if (Session::has('status'))
                <div class="alert alert-success">
                  {{Session::get('status')}}
                </div>
              @endif
            
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Num.</th>
                    <th>Picture</th>
                    <th>Description one</th>
                    <th>Description Two</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($sliders as $slider)
                  <tr>
                    <td>{{$increment}}</td>
                    <td>
                      <img src="/storage/slider_images/{{$slider->slider_image}}" style="height : 50px; width : 50px" class="img-circle elevation-2" alt="Product Image">
                    </td>
                    <td>{{$slider->description1}}</td>
                    <td>{{$slider->description2}}</td>
                    <td>
                      @if ($slider->status == 1)
                      <a href="{{url('/unactivate_slider/'.$slider->id)}}" class="btn btn-success">Unactivate</a>
                      @else
                      <a href="{{url('/activate_slider/'.$slider->id)}}" class="btn btn-warning">Activate</a>
                      @endif
                      <a href="{{url('/edit_slider/'.$slider->id)}}" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                      <a href="{{url('/delete_slider/'.$slider->id)}}" id="delete" class="btn btn-danger" ><i class="nav-icon fas fa-trash"></i></a>
                    </td>
                  </tr>
                  {{Form::hidden('', $increment = $increment + 1)}}
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Num.</th>
                    <th>Picture</th>
                    <th>Description one</th>
                    <th>Description Two</th>
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