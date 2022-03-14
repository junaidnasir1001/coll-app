<?php

namespace App\Http\Controllers;
use App\Imports\StudentImport;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use DataTables;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, Student $student)
    {
        try {
            $student->admission_year = $request->admission_year;
            $student->admission_form_no = $request->admission_form_no;
            $student->admitted_in = $request->admitted_in;
            $student->admission_level = $request->admission_level;
            $student->admission_on = $request->admission_on;
            $student->quota_type = $request->quota_type;
            $student->college_roll_no = $request->college_roll_no;
            $student->registration_no = $request->registration_no;
            $student->roll_no_one = $request->roll_no_one;
            $student->roll_no_two = $request->roll_no_two;
            $student->academic_session = $request->academic_session;
            $student->current_semester_year = $request->current_semester_year;
            $student->name = $request->name;
            $student->cnic = $request->cnic;
            $student->date_of_cnic_issue = $request->date_of_cnic_issue;
            $student->father_name = $request->father_name;
            $student->father_cnic = $request->father_cnic;
            $student->guardian_name = $request->guardian_name;
            $student->guardian_cnic = $request->guardian_cnic;
            $student->guardian_relation = $request->guardian_relation;
            $student->student_phone_no = $request->student_phone_no;
            $student->home_phone_no = $request->home_phone_no;
            $student->gender = $request->gender;
            $student->hafiz = $request->hafiz;
            $student->domicile_district = $request->domicile_district;
            $student->residential_city = $request->residential_city;
            $student->province = $request->province;
            $student->nationality = $request->nationality;
            $student->email = $request->email;
            $student->disability = $request->disability;
            $student->disability_type = $request->disability_type;
            $student->postal_address = $request->postal_address;
            $student->permanent_address = $request->permanent_address;
            $student->matric_roll_no = $request->matric_roll_no;
            $student->matric_registration_no = $request->matric_registration_no;
            $student->matric_board_name = $request->matric_board_name;
            $student->matric_passing_year = $request->matric_passing_year;
            $student->matric_pass_type = $request->matric_pass_type;
            $student->matric_total_marks = $request->matric_total_marks;
            $student->matric_obtained_marks = $request->matric_obtained_marks;
            $student->matric_grade = $request->matric_grade;
            $student->matric_board_noc = $request->matric_board_noc;
            $student->matric_institute_name = $request->matric_institute_name;
            $student->matric_subject_combination = $request->matric_subject_combination;
            $student->inter_roll_no = $request->inter_roll_no;
            $student->inter_registration_no = $request->inter_registration_no;
            $student->inter_board_name = $request->inter_board_name;
            $student->inter_passing_year = $request->inter_passing_year;
            $student->inter_pass_type = $request->inter_pass_type;
            $student->inter_total_marks = $request->inter_total_marks;
            $student->inter_obtained_marks = $request->inter_obtained_marks;
            $student->inter_grade = $request->inter_grade;
            $student->inter_institute_name = $request->inter_institute_name;
            $student->inter_subject_combination = $request->inter_subject_combination;
            $student->marital_status = $request->marital_status;

            $student->save();
            $response = array('status' => 'success', 'message' => 'Data Inserted Successful');
            return response()->json($response, 200);

        } catch (\Exception $exception) {

            $response = array('status' => 'error', 'message' => $exception->getMessage());
            return response()->json($response,500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.student.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    public function showData(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="'. $row->id .'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                 <form action="{{ route(\'destroy\',' . $row->id . ') }}" method="POST" class="delete_form">
                    '.csrf_field().'
                    '.method_field("DELETE").'
                   <button type="submit" class="btn btn-xs btn-danger"
                    >Delete</a>
                    </form>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function import(Request $request)
    {
        Excel::import(new StudentImport,$request->file('student_file'));
        return back();
    }

}
