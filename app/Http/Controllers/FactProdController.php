<?php

namespace App\Http\Controllers;

use App\FactProd;
use Illuminate\Http\Request;

class FactProdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factProds = FactProd::all();



        return response()->json([
            "data"=>$factProds,
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
        $factProd = FactProd::create($request->all());
        return response()->json([
            "mensaje"=>"Ha sido creado correctamente el producto",
            "data"=>$factProd,
            "status"=>202,
        ], 202);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FactProd  $factProd
     * @return \Illuminate\Http\Response
     */
    public function show(FactProd $factProd)
    {
        return response()->json([
            "Mensaje"=>"Producto elegido",
            "data"=>$factProd,
            "status"=>200,
        ], 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FactProd  $factProd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FactProd $factProd)
    {
        $factProd->update($request->all());
        return response()->json([
            "Mensaje"=>"Fue actualizado correctamente",
            "data"=>$factProd,
            "status"=>200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FactProd  $factProd
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactProd $factProd)
    {
        $factProd->delete();
        return response()->json([
            "Mensaje"=>"El producto fue eliminado correctamente",
            "data"=>$factProd,
            "status"=>200,
        ], 200);
    }
}
