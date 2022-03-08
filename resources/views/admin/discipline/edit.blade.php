@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Class Room</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Class Rooms</a></li>
                            <li class="breadcrumb-item active">Add Classs Room</li>
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
                        <h3 class="card-title">Class Room Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="form">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Discipline Name:</label>
                                        <input type="text" class="form-control" name="discipline_name" id=""
                                               placeholder="Enter Discipline Name" value="{{ old('discipline_name', $discipline->discipline_name) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Discipline Short Code:</label>
                                        <input type="text" class="form-control" id="" name="discipline_shor_code"
                                               placeholder="Enter Discipline Short Code" value="{{ old('discipline_shor_code', $discipline->discipline_shor_code) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Department Name:</label>
                                        <select class="form-control select2 " name="department_name"
                                                style="width: 100%;">
                                            <option value="" selected="selected" disabled selected>...Select Department
                                                Name...
                                            </option>
                                            @foreach($department as $depart)
                                                <option value="{{$depart->id}}"> {{$depart->department}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Shift:</label>
                                        <input type="text" name="shift" class="form-control" id=""
                                               placeholder="Enter Shift" value="{{ old('shift', $discipline->shift) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Subject Combination:</label>
                                        <input type="text" name="subject_combination" class="form-control" id=""
                                               placeholder="Enter Subject Combination" value="{{ old('subject_combination', $discipline->subject_combination) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Affiliated From:</label>
                                        <input type="text" name="afffiliated_form" class="form-control" id=""
                                               placeholder="Enter Affiliated From" value="{{ old('afffiliated_form', $discipline->afffiliated_form) }}">
                                    </div>
                                    <input type="hidden" name="contactable_id" id="contactable_id" value="{{ old('id', $discipline->id) }}">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 ob-btn-login">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                                @csrf
                            </div>
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
                    class_room_number: {
                        required: true,
                    },
                    block_name: {
                        required: true
                    },
                    seating_capacity: {
                        required: true
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
                var id = $('#contactable_id').val();
                var route = "{{route('discipline.update',['discipline'=>':discipline'])}}";
                route = route.replace(':discipline', id);
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
                        $('#dt').DataTable().ajax.reload();
                        alertMsg(response.message, response.status);
                        $('#edit_modal').modal('hide');
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
