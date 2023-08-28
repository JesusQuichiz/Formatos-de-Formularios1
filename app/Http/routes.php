<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('Proyecto1Senati', function () {
    return view('welcome');
});
Route::get('Proyecto1Senati/BalanceHidrico', function () {
    return view('BalanceHidrico');
});
Route::get('Proyecto1Senati/kardexpaciente', function () {
    return view('kardexpaciente');
});
Route::get('Proyecto1Senati/Movimientodiario', function () {
    return view('Movimientodiario');
});
Route::get('Proyecto1Senati/Evolucionmedica', function () {
    return view('Evolucionmedica');
});
Route::get('Proyecto1Senati/EvolucionEnfermeria', function () {
    return view('EvolucionEnfermeria');
});
Route::get('Proyecto1Senati/Graficaclinica', function () {
    return view('Graficaclinica');
});
Route::get('Proyecto1Senati/RegistroIncidentes', function () {
    return view('RegistroIncidentes');
});
Route::get('Proyecto1Senati/NotaIngresoEnfermeria', function () {
    return view('NotaIngresoEnfermeria');
});
Route::get('Proyecto1Senati/lunes1707', function () {
    return view('lunes1707');
});
Route::get('Proyecto1Senati/HojaInterconsulta', function () {
    return view('HojaInterconsulta');
});
Route::get('Proyecto1Senati/ProcesoAtencionEnfermeria', function () {
    return view('ProcesoAtencionEnfermeria');
});
