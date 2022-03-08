@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Subject</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Subject</a></li>
                            <li class="breadcrumb-item active">Add Subject</li>
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
                        <h3 class="card-title">Subject Form</h3>
                    </div>
                    <form id="form">
                    @csrf
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="">Subject Name:</label>
                                        <input type="text" class="form-control" name="subject_name" id="" placeholder="Enter Subject Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Subject Code:</label>
                                        <input type="text" class="form-control" name="subject_code" id="" placeholder="Enter Subject Code">
                                    </div>
                                    <div class="form-group">
                                        <label>Discipline:</label>
                                        <select class="form-control select2 " name="discipline" style="width: 100%;">
                                            <option value="" selected="selected" disabled selected>...Select Department Name...</option>
                                            @foreach($discipline as $disciplin)
                                                <option value="{{$disciplin->id}}"> {{$disciplin->discipline_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Lectures/Week:</label>
                                        <input type="text" class="form-control" name="lecture" id="" placeholder="Enter Lectures/Week">
                                    </div>


                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Credit Hours:</label>
                                        <input type="number" class="form-control" id=""
                                               placeholder="Enter Credit Hours" name="credit_hours">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Subject Short Name:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Subject Short Name" name="subject_short_name">
                                    </div>

                                    <div class="form-group">
                                        <label>Semester/Year:</label>
                                        <select class="form-control select2 " name="semester" style="width: 100%;">
                                            <option value="" selected="selected" disabled selected>...Select Department Name...</option>
                                            @foreach($semester as $semeste)
                                                <option value="{{$semeste->id}}"> {{$semeste->semester}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <button type="" class="btn btn-primary">Add</button>
                            @csrf
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
                let route = "{{route('subject.store')}}";
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
