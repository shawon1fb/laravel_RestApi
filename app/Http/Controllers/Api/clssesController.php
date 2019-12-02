<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\clss;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class clssesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Class_data = clss::all();
        return $Class_data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        print('=====================================');
        print($request);

        $validatedData = $request->validate([
            'class_name' => 'required',
        ]);

        clss::insert($request->all());

        /*$data = array();
        $data['class_name'] = $request->class_name;
        DB::table('clsses')->insert($data);*/

        $r = array();
        $r['done'] = $request->class_name;
        return $r;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'class_name' => 'required',
        ]);

        try {
            $data = clss::find($request->id);
            $data->class_name = $request->class_name;
          //  $data = $request->all();
            $data->save();

        } catch (Exception $ex) {

            return $ex;
        }

        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = clss::find($id);
        $data->delete();
        return $data;
    }
}
