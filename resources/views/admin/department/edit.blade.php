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
                                        <label for="">Class Room NUmber:</label>
                                        <input type="number" class="form-control" name="class_room_number" id=""
                                               placeholder="Enter Class Room Number" value="{{ old('class_room_number', $class_room->class_room_number) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Block Name:</label>
                                        <input type="text" class="form-control" name="block_name" id=""
                                               placeholder="Enter Block Name" value="{{ old('block_name', $class_room->block_name) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Seating Capacity</label>
                                        <input type="number" class="form-control" name="seating_capacity" id=""
                                               placeholder="Enter Seating Capacity" value="{{ old('seating_capacity', $class_room->seating_capacity) }}">
                                    </div>
                                </div>
                                <input type="hidden" name="contactable_id" id="contactable_id" value="{{ old('id', $class_room->id) }}">
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
                var route = "{{route('class-room.update',['class_room'=>':class_room'])}}";
                route = route.replace(':class_room', id);
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
