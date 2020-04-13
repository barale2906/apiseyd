<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Rutas publicas
Route::post('/register', 'Api\UserController@register');
Route::post('/login', 'Api\UserController@login');



// Rutas privadas
Route::group(['middleware' => 'auth:api'], function () {

    Route::get('/logout', 'Api\UserController@logout');
    Route::apiResource ('/modulos', 'ModuloController');
    Route::apiResource ('/rols', 'RolController');
    Route::apiResource ('/dotacions', 'DotacionController');
    Route::apiResource ('/ciudads', 'CiudadController');
    Route::apiResource ('/fact_prods', 'FactProdController');
    Route::apiResource ('/fact_tip_prods', 'FactTipProdController');

    Route::apiResource ('/empresas', 'EmpresaController');
    Route::apiResource ('/modulo_asignados', 'ModuloAsignadoController');
    Route::apiResource ('/usu_adis', 'UsuAdiController');
    Route::apiResource ('/usu_sops', 'UsuSopController');
    Route::apiResource ('/usu_emps', 'UsuEmpController');
    Route::apiResource ('/usu_sals', 'UsuSalController');
    Route::apiResource ('/huma_cers', 'HumaCerController');
    Route::apiResource ('/huma_dots', 'HumaDotController');
    Route::apiResource ('/huma_vacas', 'HumaVacaController');

});
