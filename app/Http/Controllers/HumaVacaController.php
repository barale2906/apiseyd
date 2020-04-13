<?php

namespace App\Http\Controllers;

use App\humaVaca;
use Illuminate\Http\Request;

class HumaVacaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $humaVacas = HumaVaca::all();
        return response()->json([
            "data"=>$humaVacas,
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
        $humaVaca = HumaVaca::create($request->all());
        return response()->json([
            "mensaje"=>"Han sido programadas correctamente las vacaciones",
            "data"=>$humaVaca,
            "status"=>202,
        ], 202);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\humaVaca  $humaVaca
     * @return \Illuminate\Http\Response
     */
    public function show(humaVaca $humaVaca)
    {
        return response()->json([
                "Mensaje"=>"Programación elegida",
                "data"=>$humaVaca,
                "status"=>200,
        ], 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\humaVaca  $humaVaca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, humaVaca $humaVaca)
    {
        $humaVaca->update($request->all());
        return response()->json([
            "Mensaje"=>"Fue actualizada correctamente la programación",
            "data"=>$humaVaca,
            "status"=>200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\humaVaca  $humaVaca
     * @return \Illuminate\Http\Response
     */
    public function destroy(humaVaca $humaVaca)
    {
        $humaVaca->delete();
        return response()->json([
            "Mensaje"=>"La programación fue eliminada correctamente",
            "data"=>$humaVaca,
            "status"=>200,
        ], 200);
    }
}
