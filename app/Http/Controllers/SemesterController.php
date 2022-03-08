<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Http\Request;
use DataTables;
class SemesterController extends Controller
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
        return view('admin.semester.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Semester $semester)
    {
        try {
            $semester->semester = $request->semester;
            $semester->save();
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
     * @param  \App\Models\Semester  $semester
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.semester.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Semester  $semester
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $semester = Semester::find($id);
        return view('admin.semester.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Semester  $semester
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Semester $semester)
    {
        try {
            $semester->semester = $request->semester;
            $semester->save();
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
     * @param  \App\Models\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semester $semester)
    {
        //
    }

    public function showData(Request $request)
    {
        if ($request->ajax()) {
            $data = Semester::latest()->get();
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
