@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>List Class Room</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
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
                                <form action="/import" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <label for="file-upload" class="custom-file-upload">
                                        <i class="fa fa-cloud-upload"></i> Browse
                                    </label>
                                    <input id="file-upload" type="file" name="student_file" accept=".xlsx" required>
                                    <br><br>
                                    <input type="submit" value="Upload">
                                </form>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered yajra-datatable">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>class_room_number</th>
                                        <th>block_name</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>seating_capacity</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
    <!-- /.content -->
    <!-- /.content-wrapper -->
@endsection
@push('js')
    <script type="text/javascript">
        $( document ).ready(function() {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('student.list') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'admission_year', name: 'admission_year'},
                    {data: 'admission_form_no', name: 'admission_form_no'},
                    {data: 'admitted_in', name: 'admitted_in'},
                    {data: 'admission_level', name: 'admission_level'},
                    {data: 'admission_on', name: 'admission_on'},
                    {data: 'quota_type', name: 'quota_type'},
                    {data: 'college_roll_no', name: 'college_roll_no'},
                    {data: 'registration_no', name: 'registration_no'},
                    {data: 'roll_no_one', name: 'roll_no_one'},
                    {data: 'roll_no_two', name: 'roll_no_two'},
                    {data: 'academic_session', name: 'academic_session'},
                    {data: 'current_semester_year', name: 'current_semester_year'},
                    {data: 'name', name: 'name'},
                    {data: 'cnic', name: 'cnic'},
                    {data: 'date_of_cnic_issue', name: 'date_of_cnic_issue'},
                    {data: 'father_name', name: 'father_name'},
                    {data: 'father_cnic', name: 'father_cnic'},
                    {data: 'guardian_name', name: 'guardian_name'},
                    {data: 'guardian_cnic', name: 'guardian_cnic'},
                    {data: 'guardian_relation', name: 'guardian_relation'},
                    {data: 'student_phone_no', name: 'student_phone_no'},
                    {data: 'home_phone_no', name: 'home_phone_no'},
                    {data: 'gender', name: 'gender'},
                    {data: 'hafiz', name: 'hafiz'},
                    {data: 'domicile_district', name: 'domicile_district'},
                    {data: 'residential_city', name: 'residential_city'},
                    {data: 'province', name: 'province'},
                    {data: 'nationality', name: 'nationality'},
                    {data: 'email', name: 'email'},
                    {data: 'disability', name: 'disability'},
                    {data: 'disability_type', name: 'disability_type'},
                    {data: 'postal_address', name: 'postal_address'},
                    {data: 'permanent_address', name: 'permanent_address'},
                    {data: 'matric_roll_no', name: 'matric_roll_no'},
                    {data: 'matric_registration_no', name: 'matric_registration_no'},
                    {data: 'matric_board_name', name: 'matric_board_name'},
                    {data: 'matric_passing_year', name: 'matric_passing_year'},
                    {data: 'matric_pass_type', name: 'matric_pass_type'},
                    {data: 'matric_total_marks', name: 'matric_total_marks'},
                    {data: 'matric_obtained_marks', name: 'matric_obtained_marks'},
                    {data: 'matric_grade', name: 'matric_grade'},
                    {data: 'matric_board_noc', name: 'matric_board_noc'},
                    {data: 'matric_institute_name', name: 'matric_institute_name'},
                    {data: 'matric_subject_combination', name: 'matric_subject_combination'},
                    {data: 'inter_roll_no', name: 'inter_roll_no'},
                    {data: 'inter_registration_no', name: 'inter_registration_no'},
                    {data: 'inter_board_name', name: 'inter_board_name'},
                    {data: 'inter_passing_year', name: 'inter_passing_year'},
                    {data: 'inter_pass_type', name: 'inter_pass_type'},
                    {data: 'inter_total_marks', name: 'inter_total_marks'},
                    {data: 'inter_obtained_marks', name: 'inter_obtained_marks'},
                    {data: 'inter_grade', name: 'inter_grade'},
                    {data: 'inter_institute_name', name: 'inter_institute_name'},
                    {data: 'inter_subject_combination', name: 'inter_subject_combination'},
                    {data: 'marital_status', name: 'marital_status'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

            $(document).on('submit', '.delete_form', function (e) {
                e.preventDefault();
                var route = $(this).attr('action');
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this data!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, keep it'
                }).then((result) => {
                    if (result.value) {
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
                                window.location.reload();
                                swal.close();
                                console.log(response)
                                alertMsg(response.message, response['status']);
                            },
                            error: function (xhr, error, status) {
                                // console.log(xhr.responseJSON.errors.name[0])
                                swal.close();
                                var response = xhr.responseJSON;
                                // alertMsg(response.message, 'error');
                                alertMsg(response.message, 'error');
                            }
                        });
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire(
                            'Cancelled',
                            'Your Data is safe :)',
                            'error'
                        )
                    }
                })
            });

        });
    </script>
@endpush
