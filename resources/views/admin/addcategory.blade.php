@extends('admin_layout.admin')


@section('content')
   
<div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-md-12">
            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add category</small></h3>
              </div>

              @if (Session::has('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
              @endif

              @if (count($errors) > 0)
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
                  
              @endif
              
              {{-- <form> --}}
              {!!Form::open(['action' => 'App\Http\Controllers\CategoryController@savecategory', 'method' => 'POST'])!!}
              {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    {{-- <label for="exampleInputEmail1">Category name</label> --}}
                    {{Form::label('', 'Category name', ['for' => 'exampleInputEmail1'])}}
                    {{Form::text('category_name', '', ['class' => 'form-control', 'id' => 'exampleInputEmail1', 'placeholder' => 'Enter category'])}}
                    {{-- <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Enter category"> --}}
                  </div>
                </div>
                
                <div class="card-footer">
                  
                  {{-- <input type="submit" class="btn btn-primary" value="Save" > --}}
                  {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
                </div>
                {!!Form::close()!!}
              {{-- </form> --}}
            </div>
            
            </div>
          
          <div class="col-md-6">

          </div>
          
        </div>
        
      </div>
    </section>
    
  </div>
  
@endsection

@section('scripts')
    
    <script src="back-end/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="back-end/plugins/jquery-validation/additional-methods.min.js"></script>
    
    <script src="back-end/dist/js/adminlte.min.js"></script>


    <script>
        $(function () {
          $.validator.setDefaults({
            submitHandler: function () {
              alert( "Form successful submitted!" );
            }
          });
          $('#quickForm').validate({
            rules: {
              email: {
                required: true,
                email: true,
              },
              password: {
                required: true,
                minlength: 5
              },
              terms: {
                required: true
              },
            },
            messages: {
              email: {
                required: "Please enter a email address",
                email: "Please enter a vaild email address"
              },
              password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
              },
              terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
            }
          });
        });
        </script>
@endsection