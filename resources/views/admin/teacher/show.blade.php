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
                                <h3 class="card-title">....</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered yajra-datatable">
                                    <thead>
                                    <tr>
                                        <th>No</th>
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
                ajax: "{{ route('teacher.list') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'reg_id', name: 'reg_id'},
                    {data: 'name', name: 'name'},
                    {data: 'father_name', name: 'father_name'},
                    {data: 'current_join_date', name: 'current_join_date'},
                    {data: 'joining_date_in_service', name: 'joining_date_in_service'},
                    {data: 'designation', name: 'designation'},
                    {data: 'dob', name: 'dob'},
                    {data: 'cnic', name: 'cnic'},
                    {data: 'address', name: 'address'},
                    {data: 'first_mobile', name: 'first_mobile'},
                    {data: 'second_mobile', name: 'second_mobile'},
                    {data: 'gender', name: 'gender'},
                    {data: 'email', name: 'email'},
                    {data: 'last_qualification', name: 'last_qualification'},
                    {data: 'department', name: 'department'},
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
