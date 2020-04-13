<?php

namespace App\Http\Controllers;

use App\UsuSop;
use Illuminate\Http\Request;

class UsuSopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuSops = UsuSop::all();
        return response()->json([
            "data"=>$usuSops,
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
        $usuSop = UsuSop::create($request->all());
        return response()->json([
            "mensaje"=>"Ha sido creado correctamente el soporte",
            "data"=>$usuSop,
            "status"=>202,
        ], 202);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UsuSop  $usuSop
     * @return \Illuminate\Http\Response
     */
    public function show(UsuSop $usuSop)
    {
        return response()->json([
            "Mensaje"=>"Asignación soportes",
            "data"=>$usuSop,
            "status"=>200,
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UsuSop  $usuSop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsuSop $usuSop)
    {
        $usuSop->update($request->all());
        return response()->json([
            "Mensaje"=>"Fue actualizado correctamente el soporte",
            "data"=>$usuSop,
            "status"=>200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UsuSop  $usuSop
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsuSop $usuSop)
    {
        $usuSop->delete();
        return response()->json([
            "Mensaje"=>"El Soporte fue eliminado correctamente para este usuario",
            "data"=>$usuSop,
            "status"=>200,
        ], 200);
    }
}
