<?php

namespace App\Http\Controllers;

use App\humaCer;
use Illuminate\Http\Request;

class HumaCerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $humaCers = HumaCer::all();
        return response()->json([
            "data"=>$humaCers,
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
        $humaCer = HumaCer::create($request->all());
        return response()->json([
            "mensaje"=>"Ha sido creado correctamente el certificado",
            "data"=>$humaCer,
            "status"=>202,
        ], 202);

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\humaCer  $humaCer
     * @return \Illuminate\Http\Response
     */
    public function show(humaCer $humaCer)
    {
        return response()->json([
                "Mensaje"=>"Certificado elegido",
                "data"=>$humaCer,
                "status"=>200,
        ], 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\humaCer  $humaCer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, humaCer $humaCer)
    {
        $humaCer->update($request->all());
        return response()->json([
            "Mensaje"=>"Fue actualizado correctamente el certificado",
            "data"=>$humaCer,
            "status"=>200,
        ], 200);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\humaCer  $humaCer
     * @return \Illuminate\Http\Response
     */
    public function destroy(humaCer $humaCer)
    {
        $humaCer->delete();
        return response()->json([
            "Mensaje"=>"El certificado fue eliminado correctamente",
            "data"=>$humaCer,
            "status"=>200,
        ], 200);
    }
}
