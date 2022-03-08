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
            <h1>Add Discipline</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Discipline</a></li>
              <li class="breadcrumb-item active">Add Discipline</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card ">
            <div class="card-header">
              <h3 class="card-title">Discipline Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                
              <div class="card-body">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Discipline Name:</label>
                            <input type="text" class="form-control" id="" placeholder="Enter Discipline Name">
                          </div>
                          <div class="form-group">
                            <label for="">Discipline Short Code:</label>
                            <input type="text" class="form-control" id="" placeholder="Enter Discipline Short Code">
                          </div>
                          <div class="form-group">
                            <label>Department Name:</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">Select Department Name</option>
                              <option> D1</option>
                              <option>D2</option>                            
                            </select>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Shift:</label>
                            <input type="text" class="form-control" id="" placeholder="Enter Shift">
                        </div>
                        <div class="form-group">
                            <label for="">Subject Combination:</label>
                            <input type="text" class="form-control" id="" placeholder="Enter Subject Combination">
                          </div>
                          <div class="form-group">
                            <label for="">Affiliated From:</label>
                            <input type="text" class="form-control" id="" placeholder="Enter Affiliated From">
                          </div>
                    </div>
 
                 </div>
                
                 <button type="submit" class="btn btn-primary">Add</button>
               
              </div>
              

             
                
             
            </form>
          </div>
        <!-- /.card -->

       


       
       
       
        <!-- /.row -->
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
