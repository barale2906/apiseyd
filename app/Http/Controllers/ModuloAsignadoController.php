<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Modulo;
use App\ModuloAsignado;
use App\User;
use Illuminate\Http\Request;

class ModuloAsignadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moduloasignados = ModuloAsignado::all();
        return response()->json([
            "data"=>$moduloasignados,
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
        $moduloAsig = ModuloAsignado::create($request->all());
        return response()->json([
            "mensaje"=>"Ha sido asignado correctamente el Modulo",
            "data"=>$moduloAsig,
            "status"=>202,
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModuloAsignado  $moduloAsignado
     * @return \Illuminate\Http\Response
     */
    public function show(ModuloAsignado $moduloAsignado)
    {
        $empresa = Empresa::findOrFail($moduloAsignado->emp_id);
        $modulo = Modulo::findOrFail($moduloAsignado->mod_id);
        $usuario = User::findOrFail($moduloAsignado->usu_id);

        return response()->json([
            "Mensaje"=>"Estos son los datos requeridos",
            "Empresa"=>$empresa,
            "Modulo"=>$modulo,
            "Usuario"=>$usuario,
            "moduloAsignado"=>$moduloAsignado,
            "status"=>200,
        ], 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModuloAsignado  $moduloAsignado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModuloAsignado $moduloAsignado)
    {
        $moduloAsignado->update($request->all());
        return response()->json([
            "Mensaje"=>"Fue actualizado correctamente",
            "data"=>$moduloAsignado,
            "status"=>200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModuloAsignado  $moduloAsignado
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModuloAsignado $moduloAsignado)
    {
        $moduloAsignado->delete();
        return response()->json([
            "Mensaje"=>"Fue eliminado correctamente",
            "data"=>$moduloAsignado,
            "status"=>200,
        ], 200);
    }
}
