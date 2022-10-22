<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\PlantaController;
use App\Http\Controllers\OrdenProduccionController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MaterialOrdenProduccionController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\QuimicoColorController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\QuimicoTratamientoController;
use App\Http\Controllers\QuimicoController;
//55

Route::get('/', function () { return view('welcome');});
//Primeras en existir
Route::get('Personal', 'App\Http\Controllers\PersonalController@index');
//Route::get('Personal', 'App\Http\Controllers\PersonalController@index');
Route::get('Puesto', 'App\Http\Controllers\PuestoController@index');
Route::get('Usuario', 'App\Http\Controllers\UsuarioController@index');
Route::get('Departamento', 'App\Http\Controllers\DepartamentoController@index');
Route::get('Planta', 'App\Http\Controllers\PlantaController@index');
Route::get('OrdenProduccion', 'App\Http\Controllers\OrdenProduccionController@index');
Route::get('Cliente', 'App\Http\Controllers\ClienteController@index');
Route::get('Material', 'App\Http\Controllers\MaterialController@index');
Route::get('MaterialOrdenProduccion', 'App\Http\Controllers\MaterialOrdenProduccionController@index');
Route::get('Color', 'App\Http\Controllers\ColorController@index');
Route::get('QuimicoColor', 'App\Http\Controllers\QuimicoColorController@index');
Route::get('Tratamiento','App\Http\Controllers\TratamientoController@index');
Route::get('QuimicoTratamiento', 'App\Http\Controllers\QuimicoTratamientoController@index');
Route::get('Quimico', 'App\Http\Controllers\QuimicoController@index');
