<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\UsuEmp;
use Illuminate\Http\Request;

class UsuEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $UsuEmps = UsuEmp::all();
        //$empresas = Empresa::where('id', 'emp_id')->get();

        return response()->json([
            "usuemps"=>$UsuEmps,
          //  "usuemps"=>$empresas,
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
        $UsuEmp = UsuEmp::create($request->all());
        return response()->json([
            "mensaje"=>"Ha sido creado correctamente la empresa",
            "data"=>$UsuEmp,
            "status"=>202,
        ], 202);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UsuEmp  $usuEmp
     * @return \Illuminate\Http\Response
     */
    public function show(UsuEmp $UsuEmp)
    {
        $empresa = Empresa::findOrFail($UsuEmp->emp_id);

        return response()->json([
                "Mensaje"=>"Empresa asignada",
                "usuEmp"=>$UsuEmp,
                "empresa"=>$empresa,
                "status"=>200,
        ], 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UsuEmp  $usuEmp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsuEmp $UsuEmp)
    {
        $UsuEmp->update($request->all());
        return response()->json([
            "Mensaje"=>"Fue actualizada correctamente",
            "data"=>$UsuEmp,
            "status"=>200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UsuEmp  $usuEmp
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsuEmp $UsuEmp)
    {
        $UsuEmp->delete();
        return response()->json([
            "Mensaje"=>"La empresa fue eliminada correctamente para este usuario",
            "data"=>$UsuEmp,
            "status"=>200,
        ], 200);
    }
}

