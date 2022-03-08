<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Discipline;
use Illuminate\Http\Request;
use DataTables;
class DisciplineController extends Controller
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
        $department = Department::all();
        return view('admin.discipline.create', compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Discipline $discipline)
    {
        try {
            $discipline->discipline_name = $request->discipline_name;
            $discipline->shift = $request->shift;
            $discipline->discipline_shor_code = $request->discipline_shor_code;
            $discipline->subject_combination = $request->subject_combination;
            $discipline->department_name = $request->department_name;
            $discipline->afffiliated_form = $request->afffiliated_form;
            $discipline->save();
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
     * @param  \App\Models\Discipline  $discipline
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.discipline.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discipline  $discipline
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::all();
        $discipline = Discipline::find($id);
        return view('admin.discipline.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discipline  $discipline
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Discipline $discipline)
    {
        try {
            $discipline->discipline_name = $request->discipline_name;
            $discipline->shift = $request->shift;
            $discipline->discipline_shor_code = $request->discipline_shor_code;
            $discipline->subject_combination = $request->subject_combination;
            $discipline->department_name = $request->department_name;
            $discipline->afffiliated_form = $request->afffiliated_form;
            $discipline->save();
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
     * @param  \App\Models\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discipline $discipline)
    {
        //
    }

    public function showData(Request $request)
    {
        if ($request->ajax()) {
            $data = Discipline::latest()->get();
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
