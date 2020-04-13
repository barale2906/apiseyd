<?php

namespace App\Http\Controllers;

use App\FactTipProd;
use Illuminate\Http\Request;

class FactTipProdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factTipProds = FactTipProd::all();



        return response()->json([
            "data"=>$factTipProds,
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
        $factTipProd = FactTipProd::create($request->all());
        return response()->json([
            "mensaje"=>"Ha sido creado correctamente el tipo de producto",
            "data"=>$factTipProd,
            "status"=>202,
        ], 202);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FactTipProd  $factTipProd
     * @return \Illuminate\Http\Response
     */
    public function show(FactTipProd $factTipProd)
    {
        return response()->json([
            "Mensaje"=>"Producto elegido",
            "data"=>$factTipProd,
            "status"=>200,
        ], 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FactTipProd  $factTipProd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FactTipProd $factTipProd)
    {
        $factTipProd->update($request->all());
        return response()->json([
            "Mensaje"=>"Fue actualizado correctamente",
            "data"=>$factTipProd,
            "status"=>200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FactTipProd  $factTipProd
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactTipProd $factTipProd)
    {
        $factTipProd->delete();
        return response()->json([
            "Mensaje"=>"El tipo de producto fue eliminado correctamente",
            "data"=>$factTipProd,
            "status"=>200,
        ], 200);
    }
}
