<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use App\Models\Semester;
use App\Models\Subject;
use Illuminate\Http\Request;
use DataTables;
class SubjectController extends Controller
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
        $semester = Semester::all();
        $discipline = Discipline::all();
        return view('admin.subject.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Subject $subject)
    {
        try {
            $subject->subject_name = $request->subject_name;
            $subject->subject_code = $request->subject_code;
            $subject->discipline = $request->discipline;
            $subject->lecture = $request->lecture;
            $subject->credit_hours = $request->credit_hours;
            $subject->subject_short_name = $request->subject_short_name;
            $subject->semester = $request->semester;
            $subject->save();
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
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.subject.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $semester = Semester::all();
        $discipline = Discipline::all();
        $subject = Subject::find($id);
        return view('admin.subject.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Subject $subject)
    {
        try {
            $subject->subject_name = $request->subject_name;
            $subject->subject_code = $request->subject_code;
            $subject->discipline = $request->discipline;
            $subject->lecture = $request->lecture;
            $subject->credit_hours = $request->credit_hours;
            $subject->subject_short_name = $request->subject_short_name;
            $subject->semester = $request->semester;
            $subject->save();
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
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }

    public function showData(Request $request)
    {
        if ($request->ajax()) {
            $data = Subject::latest()->get();
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
