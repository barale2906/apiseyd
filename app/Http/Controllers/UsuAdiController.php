<?php

namespace App\Http\Controllers;

use App\UsuAdi;
use Illuminate\Http\Request;

class UsuAdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuAdis = UsuAdi::all();
        return response()->json([
            "data"=>$usuAdis,
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
        $usuAdi = UsuAdi::create($request->all());
        return response()->json([
            "mensaje"=>"Ha sido creado correctamente el registro",
            "data"=>$usuAdi,
            "status"=>202,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UsuAdi  $usuAdi
     * @return \Illuminate\Http\Response
     */
    public function show(UsuAdi $usuAdi)
    {
        return response()->json([
            "Mensaje"=>"Estos son los datos requeridos",
            "data"=>$usuAdi,
            "status"=>200,
    ], 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UsuAdi  $usuAdi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsuAdi $usuAdi)
    {
        $usuAdi->update($request->all());
        return response()->json([
            "Mensaje"=>"Fue actualizado correctamente",
            "data"=>$usuAdi,
            "status"=>200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UsuAdi  $usuAdi
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsuAdi $usuAdi)
    {
        $usuAdi->delete();
        return response()->json([
            "Mensaje"=>"Fue eliminado correctamente",
            "data"=>$usuAdi,
            "status"=>200,
        ], 200);
    }
}
