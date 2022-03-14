<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Class Rooms
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('class-room/create')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Class Room</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('class-room/show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Class Room</p>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Program Level
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('program-level/create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Program Level</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('program-level/show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Program Level</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Student
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('student/create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Student</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('student/show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Student</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Department
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('department/create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Department</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('department/show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Department</p>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Designation
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('designation/create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Designation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('designation/show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Designation</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Teachers
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('teacher/create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Teacher</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('teacher/show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Teacher</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Session Academic
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('session-academic/create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Session Academic</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('session-academic/show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Session Academic</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Discipline
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('discipline/create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Discipline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('discipline/show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Discipline</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Semester/Year
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('semester/create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Semester/Year</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('semester/show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Semester/Year</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Status
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('add-status')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Status</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="View_Status.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Status</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Subject
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('subject/create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Subject</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('subject/show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Subject</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Time Table
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="Add_Time_Table.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Time Table</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="View_Time_Table.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Time Table</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
