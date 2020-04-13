<?php

namespace App\Http\Controllers;

use App\humaDot;
use Illuminate\Http\Request;

class HumaDotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $humaDots = HumaDot::all();
        return response()->json([
            "data"=>$humaDots,
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
        $humaDot = HumaDot::create($request->all());
        return response()->json([
            "mensaje"=>"Ha sido asignada correctamente la dotación",
            "data"=>$humaDot,
            "status"=>202,
        ], 202);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\humaDot  $humaDot
     * @return \Illuminate\Http\Response
     */
    public function show(humaDot $humaDot)
    {
        return response()->json([
                "Mensaje"=>"Asignación seleccionada",
                "data"=>$humaDot,
                "status"=>200,
        ], 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\humaDot  $humaDot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, humaDot $humaDot)
    {
        $humaDot->update($request->all());
        return response()->json([
            "Mensaje"=>"Fue actualizada correctamente la asignación",
            "data"=>$humaDot,
            "status"=>200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\humaDot  $humaDot
     * @return \Illuminate\Http\Response
     */
    public function destroy(humaDot $humaDot)
    {
        $humaDot->delete();
        return response()->json([
            "Mensaje"=>"La asignación fue eliminada correctamente",
            "data"=>$humaDot,
            "status"=>200,
        ], 200);
    }
}
