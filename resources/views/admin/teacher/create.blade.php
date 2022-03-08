@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Teacher</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Teachers</a></li>
              <li class="breadcrumb-item active">Add Teacher</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Teacher Form</h3>

          </div>
          <form>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Reg ID:</label>
                        <input type="number" class="form-control" id="" placeholder="Enter Registration id">
                    </div>
                    <div class="form-group">
                        <label for="">Name:</label>
                        <input type="text" class="form-control" id="" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="">Father Name:</label>
                        <input type="text" class="form-control" id="" placeholder="Enter Father Name">
                    </div>
                    <div class="form-group">
                        <label for="">Current Join Date:</label>
                        <input type="date" class="form-control" id="" placeholder="Enter Current Join Date">
                    </div>
                    <div class="form-group">
                        <label for="">Joining Date in Service:</label>
                        <input type="date" class="form-control" id="" placeholder="Enter Joining Date in Service">
                    </div>
                    
                    <div class="form-group">
                    <label>Designation:</label>
                    <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Select Designation</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="">Date of Birth:</label>
                        <input type="date" class="form-control" id="" placeholder="Enter Date of Birth">
                    </div>
                    <div class="form-group">
                        <label for="">CNIC:</label>
                        <input type="number" class="form-control" id="" placeholder="Enter CNIC">
                    </div>
                    <div class="form-group">
                        <label for="">Address:</label>
                        <input type="text" class="form-control" id="" placeholder="Enter Address">
                    </div>
                    
                    
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Mobile 1:</label>
                        <input type="number" class="form-control" id="" placeholder="Enter Mobile1 Number">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Mobile 2:</label>
                        <input type="number" class="form-control" id="" placeholder="Enter Mobile2 Number">
                    </div>
                    <div class="form-group">
                        <label for="">Gender:</label>
                        <input type="text" class="form-control" id="" placeholder="Enter Gender">
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" id="" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="">Last Qualification:</label>
                        <input type="text" class="form-control" id="" placeholder="Enter Last Qualification">
                    </div>
                    <div class="form-group">
                    <label>Department:</label>
                    <select class="form-control select2 " data-dropdown-css-class="select2" style="width: 100%;">
                        <option selected="selected">Select Department</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="">Image:</label>
                        <input type="file" class="form-control" id="" >
                    </div>
                    <div class="form-group">
                        <label for="">Marital Status:</label>
                        <input type="text" class="form-control" id="" placeholder="Enter Marital Status">
                    </div>
                
                    
                </div>
                
                </div>
            
                <button type="submit" class="btn btn-primary">Add</button>
                
            
            </div>
        </form>
         
        </div>
        <!-- /.card -->


        

       
     
      
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content-wrapper -->
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $('#form').validate({
                rules: {
                    designation: {
                        required: true,
                    }
                },
                messages: {},
                errorElement: 'small',
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
            $('#form').on('submit', function (e) {
                e.preventDefault();
                // check if the input is valid using a 'valid' property
                if (!$('#form').valid()) {
                    return false;
                }
                let route = "{{route('designation.store')}}";
                console.log(route)
                $.ajax({
                    type: 'POST',
                    url: route,
                    data: new FormData(this),
                    contentType: false,
                    data_type: 'json',
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        loader();
                    },
                    success: function (response) {
                        swal.close();
                        //$('#dt').DataTable().ajax.reload(); // user paging is not reset on reload
                        alertMsg(response.message, response.status);
                        //$('#add_form')[0].reset();
                        //$('#add_modal').modal('hide');
                    },
                    error: function (xhr, error, status) {
                        swal.close();
                        var response = xhr.responseJSON;
                        alertMsg(response.message, 'error');
                    }
                });
            });

        });
    </script>


@endpush
