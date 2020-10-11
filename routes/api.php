<?php

use Illuminate\Http\Request;

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

Route::get('/movil/recinto/get_data', 'RecintoController@index');
Route::get('/movil/recinto/get_mesa/{id}', 'MovilController@get_mesa');
Route::get('/movil/mesa/show_mesa/{id}', 'MovilController@show_mesa');


Route::get('/movil/departamento/get_data', 'MovilController@get_ciudad');
Route::get('/movil/recintos_ciudad/{id}', 'RecintoController@getRecintoByCidad');

Route::get('/reporte/data', 'ReporteController@getDataReporte');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
