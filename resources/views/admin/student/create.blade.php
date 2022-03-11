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
                        <h1>Add Students</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Students</a></li>
                            <li class="breadcrumb-item active">Add Students</li>
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
                        <h3 class="card-title">Students Form</h3>

                    </div>
                    <form id="form">
                        @csrf
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Admission Year:</label>
                                        <input type="number" class="form-control" id=""
                                               placeholder="Enter Registration id" name="admission_year">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Admission Form no:</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter Name" name="admission_form_no">
                                    </div>
                                    <div class="form-group">
                                        <label>Admission Level:</label>
                                        <select class="form-control select2" name="admission_level" style="width: 100%;">
                                            <option selected="selected">Select Level</option>
                                            <option>Intermediate</option>
                                            <option>Bachelor</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Admission In:</label>
                                        <select class="form-control select2" name="admitted_in" style="width: 100%;">
                                            <option selected="selected">Select Level</option>
                                            <option>Pre Eng</option>
                                            <option>ICS</option>
                                            <option>FA</option>
                                            <option>BS </option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Admission On:</label>
                                        <select class="form-control select2" name="admission_on" style="width: 100%;">
                                            <option selected="selected">Select Level</option>
                                            <option>Open Merit</option>
                                            <option>Quota</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Quota Type:</label>
                                        <select class="form-control select2" name="quota_type" style="width: 100%;">
                                            <option selected="selected">Select Level</option>
                                            <option>Teacher Quota</option>
                                            <option>Disable Quota</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">College Roll#:</label>
                                        <input type="date" class="form-control" id="" placeholder="Enter Date of Birth" name="college_roll_no">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Registration #:</label>
                                        <input type="number" class="form-control" id="" placeholder="Enter CNIC" name="registration_no">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Roll # 1:</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter Address" name="roll_no_one">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Inter Roll No:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="roll_no_two">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Inter Registration No:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="inter_registration_no">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Inter Board Name:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="inter_board_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Inter Passing Year:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="inter_passing_year">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Inter Pass Type:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="inter_pass_type">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Inter Total Marks:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="inter_total_marks">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Inter Obtained Marks:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="inter_obtained_marks">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Inter Grade:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="inter_grade">
                                    </div>
                                    ]
                                    <div class="form-group">
                                        <label for="">Inter Institution Name:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="inter_institute_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Inter Subject Combination:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="inter_subject_combination">
                                    </div>


                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Academic Session:</label>
                                        <input type="number" class="form-control" id=""
                                               placeholder="Enter Mobile2 Number" name="academic_session">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Semester/Current:</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter Gender" name="current_semester_year">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Name:</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Father Name:</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter " name="father_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Father Cnic:</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter " name="father_cnic">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Guardian Name:</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter " name="guardian_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Guardian CNic:</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter " name="guardian_cnic">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Guardian Relation:</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter " name="guardian_relation">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Student No:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="student_phone_no">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Date of Cnic Issue:</label>
                                        <input type="date" class="form-control" id="" name="date_of_cnic_issue">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Home No:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="home_phone_no">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Gender:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="gender">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Hafiz:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="hafiz">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Domicile District:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="domicile_district">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Residential City:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="residential_city">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Province:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="province">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nationality:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="nationality">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email:</label>
                                        <input type="email" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Disability (if any):</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="disability">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Disability Type:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="disability_type">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Postal Address:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="postal_address">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Permanent Address:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="permanent_address">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Matric Roll No:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="matric_roll_no">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Matric Registration No:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="matric_registration_no">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Matric Board Name:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="matric_board_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Matric Passing Year:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="matric_passing_year">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Matric Pass Type:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="matric_pass_type">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Matric Total Marks:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="matric_total_marks">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Matric Obtained Marks:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="matric_obtained_marks">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Matric Grade:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="matric_grade">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Board Noc:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="matric_board_noc">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Matric Institution Name:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="matric_institute_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Matric Subject Combination:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Last Qualification" name="matric_subject_combination">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Marital Status:</label>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Enter Marital Status" name="marital_status">
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
                let route = "{{route('student.store')}}";
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
