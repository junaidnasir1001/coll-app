<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\File;

class TeacherController extends Controller
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
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Teacher $teacher)
    {
        try {
            $teacher->reg_id = $request->reg_id;
            $teacher->name = $request->name;
            $teacher->father_name = $request->father_name;
            $teacher->current_join_date = $request->current_join_date;
            $teacher->joining_date_in_service = $request->joining_date_in_service;
            $teacher->designation = $request->designation;
            $teacher->dob = $request->dob;
            $teacher->cnic = $request->cnic;
            $teacher->address = $request->address;
            $teacher->first_mobile = $request->first_mobile;
            $teacher->second_mobile = $request->second_mobile;
            $teacher->gender = $request->gender;
            $teacher->email = $request->email;
            $teacher->last_qualification = $request->last_qualification;
            $teacher->department = $request->department;
            $teacher->marital_status = $request->marital_status;

            if ($request->hasFile('file_path')) {
                $file_name = time() . '-document' . '.' . $request->file_path->extension();
                $filePath = '/documents/teacher/';
                //dd($filePath);
                $request->file_path->move(public_path($filePath), $file_name);
                $teacher->file_path = $filePath . $file_name;
            }
            $teacher->save();
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
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.teacher.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::all();
        $teacher = Teacher::find($id);
        return view('admin.teacher.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Teacher $teacher)
    {
        try {
            $teacher->reg_id = $request->reg_id;
            $teacher->name = $request->name;
            $teacher->father_name = $request->father_name;
            $teacher->current_join_date = $request->current_join_date;
            $teacher->joining_date_in_service = $request->joining_date_in_service;
            $teacher->designation = $request->designation;
            $teacher->dob = $request->dob;
            $teacher->cnic = $request->cnic;
            $teacher->address = $request->address;
            $teacher->first_mobile = $request->first_mobile;
            $teacher->second_mobile = $request->second_mobile;
            $teacher->gender = $request->gender;
            $teacher->email = $request->email;
            $teacher->last_qualification = $request->last_qualification;
            $teacher->department = $request->department;
            $teacher->marital_status = $request->marital_status;

            if ($request->hasFile('file_path')) {

                if (file_exists(public_path($request->hidden_document_old_file_path))) {
                    File::delete(public_path($request->hidden_document_old_file_path));
                }
                $file_name = time() . '-document' . '.' . $request->file_path->extension();
                $filePath = '/documents/teacher/';
                //dd($filePath);
                $request->file_path->move(public_path($filePath), $file_name);
                $teacher->file_path = $filePath . $file_name;
            }
            $teacher->save();
            $response = array('status' => 'success', 'message' => 'Data Inserted Successful');
            return response()->json($response, 200);

        } catch (\Exception $exception) {

            $response = array('status' => 'error', 'message' => $exception->getMessage());
            return response()->json($response,500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }

    public function showData(Request $request)
    {
        if ($request->ajax()) {
            $data = Teacher::latest()->get();
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
}
