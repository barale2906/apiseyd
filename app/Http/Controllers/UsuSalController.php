<?php

namespace App\Http\Controllers;

use App\usuSal;
use Illuminate\Http\Request;

class UsuSalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuSals = UsuSal::all();
        return response()->json([
            "data"=>$usuSals,
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
        $usuSal = UsuSal::create($request->all());
        return response()->json([
            "mensaje"=>"Ha sido creado correctamente el salario",
            "data"=>$usuSal,
            "status"=>202,
        ], 202);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuSal  $usuSal
     * @return \Illuminate\Http\Response
     */
    public function show(usuSal $usuSal)
    {
        return response()->json([
                "Mensaje"=>"Asignación salarial",
                "data"=>$usuSal,
                "status"=>200,
        ], 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuSal  $usuSal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuSal $usuSal)
    {
        $usuSal->update($request->all());
        return response()->json([
            "Mensaje"=>"Fue actualizado correctamente el salario",
            "data"=>$usuSal,
            "status"=>200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuSal  $usuSal
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuSal $usuSal)
    {
        $usuSal->delete();
        return response()->json([
            "Mensaje"=>"El Salario fue eliminado correctamente para este usuario",
            "data"=>$usuSal,
            "status"=>200,
        ], 200);
    }
}
