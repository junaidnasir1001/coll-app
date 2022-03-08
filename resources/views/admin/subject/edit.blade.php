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
                                        <label for="">Reg ID:</label>
                                        <input type="number" class="form-control" id=""
                                               placeholder="Enter Registration id" name="reg_id">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Name:</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter Name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Father Name:</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter Father Name" name="father_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Current Join Date:</label>
                                        <input type="date" class="form-control" id=""
                                               placeholder="Enter Current Join Date" name="current_join_date">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Joining Date in Service:</label>
                                        <input type="date" class="form-control" id=""
                                               placeholder="Enter Joining Date in Service" name="joining_date_in_service">
                                    </div>

                                    <div class="form-group">
                                        <label>Designation:</label>
                                        <select class="form-control select2" name="designation" style="width: 100%;">
                                            <option selected="selected">Select Designation</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Date of Birth:</label>
                                        <input type="date" class="form-control" id="" placeholder="Enter Date of Birth" name="dob">
                                    </div>
                                    <div class="form-group">
                                        <label for="">CNIC:</label>
                                        <input type="number" class="form-control" id="" placeholder="Enter CNIC" name="cnic">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Address:</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter Address" name="address">
                                    </div>


                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Mobile 1:</label>
                                        <input type="number" class="form-control" id=""
                                               placeholder="Enter Mobile1 Number" name="first_mobile">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Mobile 2:</label>
                                        <input type="number" class="form-control" id=""
                                               placeholder="Enter Mobile2 Number" name="second_mobile">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Gender:</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter Gender" name="gender">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email:</label>
                                        <input type="email" class="form-control" id="" placeholder="Enter Email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Last Qualification:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="last_qualification">
                                    </div>
                                    <div class="form-group">
                                        <label>Department:</label>
                                        <select class="form-control select2" name="department" data-dropdown-css-class="select2"
                                                style="width: 100%;">
                                            <option selected="selected">Select Department</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Image:</label>
                                        <input type="file" class="form-control" id="" name="file_path">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Marital Status:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Marital Status" name="marital_status">
                                    </div>
                                </div>
                                <input type="hidden" name="contactable_id" id="contactable_id" value="{{ old('id', $subject->id) }}">
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
                var route = "{{route('subject.update',['subject'=>':subject'])}}";
                route = route.replace(':subject', id);
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
