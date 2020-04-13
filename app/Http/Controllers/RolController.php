<?php

namespace App\Http\Controllers;

use App\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rols = Rol::all();
        return response()->json([
            "data"=>$rols,
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
        $rol = Rol::create($request->all());
        return response()->json([
            "mensaje"=>"Ha sido creado correctamente el Rol",
            "data"=>$rol,
            "status"=>202,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        return response()->json([
            "Mensaje"=>"Estos son los datos requeridos",
            "data"=>$rol,
            "status"=>200,
        ], 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rol $rol)
    {
        $rol->update($request->all());
        return response()->json([
            "Mensaje"=>"Fue actualizado correctamente",
            "data"=>$rol,
            "status"=>200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rol $rol)
    {
        $rol->delete();
        return response()->json([
            "Mensaje"=>"Fue eliminado correctamente",
            "data"=>$rol,
            "status"=>200,
        ], 200);
    }
}
