<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    // return redirect('/login');
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/token', 'HomeController@token');
Route::post('/logout', 'HomeController@logout');

Route::post('reporte/generar1', 'ReporteController@generar1');
Route::post('reporte/generar2', 'ReporteController@generar2');

Route::get('/reporte_voto', function () {
    // return redirect('/login');
    return view('layouts.app');
});


Route::get('/inicio/recinto/index', 'HomeController@index');
Route::get('/inicio/recinto/create', 'HomeController@index');

Route::get('/inicio/ciudadano/index', 'HomeController@index');
Route::get('/inicio/ciudadano/create', 'HomeController@index');

Route::get('/inicio/partido/index', 'HomeController@index');
Route::get('/inicio/partido/create', 'HomeController@index');

Route::get('/inicio/acta/index', 'HomeController@index');
Route::get('/inicio/acta/create', 'HomeController@index');

Route::get('/inicio/servicio/index', 'HomeController@index');
Route::get('/inicio/estadistica/index', 'HomeController@index');

Route::get('/inicio/ciudad/get_ciudad', 'CiudadController@index');

Route::get('/inicio/recinto/get_recinto', 'RecintoController@index');
Route::post('/inicio/recinto/store', 'RecintoController@store');
Route::get('/inicio/recinto/get_detalle/{id}', 'RecintoController@show');

Route::get('/inicio/ciudadano/get_ciudadano', 'PersonaController@index');
Route::post('/inicio/ciudadano/store', 'PersonaController@store');

Route::get('/inicio/partido/get_partido', 'PartidoController@index');
Route::post('/inicio/partido/store', 'PartidoController@store');

Route::post('/inicio/acta/store', 'ActaController@store');
Route::get('/inicio/acta/get_acta', 'ActaController@index');

Route::get('/home', function() {
    return view('layouts.app');
});
Route::get('/reporte_voto', function() {
    return view('layouts.app');
});
Route::get('/inicio/recinto/index', function() {
    return view('layouts.app');
});
Route::get('/inicio/recinto/create', function() {
    return view('layouts.app');
});
Route::get('/inicio/ciudadano/index', function() {
    return view('layouts.app');
});
Route::get('/inicio/ciudadano/create', function() {
    return view('layouts.app');
});
Route::get('/inicio/partido/index', function() {
    return view('layouts.app');
});
Route::get('/inicio/partido/create', function() {
    return view('layouts.app');
});
Route::get('/inicio/acta/index', function() {
    return view('layouts.app');
});
Route::get('/inicio/acta/create', function() {
    return view('layouts.app');
});
Route::get('/inicio/acta/show/:id' , function() {
    return view('layouts.app');
});
Route::get('/inicio/servicio/index', function() {
    return view('layouts.app');
});
Route::get('/inicio/estadistica/index', function() {
    return view('layouts.app');
});




