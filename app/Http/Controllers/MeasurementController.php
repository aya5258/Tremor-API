<?php

namespace App\Http\Controllers;

use App\Models\Measurement;
use Illuminate\Http\Request;

class MeasurementController extends Controller
{

    public function index()
    {
        $measurements = Measurement::all();
        return response()->json(
         ['message'=>'success','data'=>$measurements]
        );
    }//index


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $measurement = Measurement::create($request->all());
        return response()->json(
            ['message'=>'data stored','data'=>$measurement]
           );
    }//store


    public function show($id)
    {
        $measurement = Measurement::find($id);
        return response()->json(
         ['message'=>'success','data'=>$measurement]
        );
    }//show


    public function edit(Measurement $measurement)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $measurement = Measurement::find($id);
        $measurement ->update($request->all());
        return response()->json(
            ['message'=>'data updated','data'=>$measurement]
           );




    }


    public function destroy($id)
    {
        $measurement = Measurement::find($id);
        $measurement ->delete();
        return response()->json(
         ['message'=>'data deleted','data'=>$measurement]
           );
    }
}
