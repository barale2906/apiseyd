<?php

namespace App\Http\Controllers;

use App\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudads = Ciudad::all();
        return response()->json([
            "data"=>$ciudads,
            "status"=>200,
        ], 200);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ciudad = Ciudad::create($request->all());
        return response()->json([
            "mensaje"=>"Ha sido creada correctamente la ciudad",
            "data"=>$ciudad,
            "status"=>202,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudad $ciudad)
    {
        return response()->json([
            "Mensaje"=>"Estos son los datos requeridos",
            "data"=>$ciudad,
            "status"=>200,
        ], 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciudad $ciudad)
    {
        $ciudad->update($request->all());
        return response()->json([
            "Mensaje"=>"Fue actualizado correctamente",
            "data"=>$ciudad,
            "status"=>200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();
        return response()->json([
            "Mensaje"=>"Fue eliminado correctamente",
            "data"=>$ciudad,
            "status"=>200,
        ], 200);
    }
}
