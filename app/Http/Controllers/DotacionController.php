<?php

namespace App\Http\Controllers;

use App\Dotacion;
use Illuminate\Http\Request;

class DotacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dotaciones = Dotacion::all();
        return response()->json([
            "data"=>$dotaciones,
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
        $dotacion = Dotacion::create($request->all());
        return response()->json([
            "mensaje"=>"Ha sido creado correctamente el elemento",
            "data"=>$dotacion,
            "status"=>202,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dotacion  $dotacion
     * @return \Illuminate\Http\Response
     */
    public function show(Dotacion $dotacion)
    {
        return response()->json([
            "Mensaje"=>"Elemento elegido",
            "data"=>$dotacion,
            "status"=>200,
        ], 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dotacion  $dotacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dotacion $dotacion)
    {
        $dotacion->update($request->all());
        return response()->json([
            "Mensaje"=>"Fue actualizado correctamente",
            "data"=>$dotacion,
            "status"=>200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dotacion  $dotacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dotacion $dotacion)
    {
        $dotacion->delete();
        return response()->json([
            "Mensaje"=>"El elemento fue eliminado correctamente",
            "data"=>$dotacion,
            "status"=>200,
        ], 200);
    }
}
