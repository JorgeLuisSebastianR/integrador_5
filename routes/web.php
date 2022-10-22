<?php
use Illuminate\Support\Facades\Route;
//Primeras en existir
use App\Http\Controllers\UsuarioAdminController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\QuimicoController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\ClienteController;
//Segundo en existir
use App\Http\Controllers\PlantaController;
use App\Http\Controllers\QuimicoColorController;
use App\Http\Controllers\QuimicoTratamientoController;
//Tersero en existir
use App\Http\Controllers\OrdenProduccionController;
use App\Http\Controllers\DepartamentoController;
//Cuarto en existir
use App\Http\Controllers\TratamientoOrdenProduccionController;
use App\Http\Controllers\MaterialOrdenProduccionController;
use App\Http\Controllers\PuestoController;
//Quinto en existir
use App\Http\Controllers\EmpleadoController;
//Sexto en existir
use App\Http\Controllers\JefeDepartamentoController;
//Sectimo en existir
use App\Http\Controllers\EstatusController;




Route::get('/', function () { return view('welcome');});
//Primeras en existir
Route::get('UsuarioAdmin', 'App\Http\Controllers\UsuarioAdminController@index');
Route::get('Material', 'App\Http\Controllers\MaterialController@index');
Route::get('Quimico', 'App\Http\Controllers\QuimicoController@index');
Route::get('Color', 'App\Http\Controllers\ColorController@index');
Route::get('Tratamiento','App\Http\Controllers\TratamientoController@index');
Route::get('Cliente', 'App\Http\Controllers\ClienteController@index');
//Segundo en existir
Route::get('Planta', 'App\Http\Controllers\PlantaController@index');
Route::get('QuimicoColor', 'App\Http\Controllers\QuimicoColorController@index');
Route::get('QuimicoTratamiento', 'App\Http\Controllers\QuimicoTratamientoController@index');
//Tersero en existir
Route::get('OrdenProduccion', 'App\Http\Controllers\OrdenProduccionController@index');
Route::get('Departamento', 'App\Http\Controllers\DepartamentoController@index');
//Cuarto en existir
Route::get('TratamientoOrdenProduccion', 'App\Http\Controllers\TratamientoOrdenProduccionController@index');
Route::get('MaterialOrdenProduccion', 'App\Http\Controllers\MaterialOrdenProduccionController@index');
Route::get('Puesto', 'App\Http\Controllers\PuestoController@index');
//Quinto en existir
Route::get('Empleado', 'App\Http\Controllers\EmpleadoController@index');
//Sexto en existir
Route::get('JefeDepartamento', 'App\Http\Controllers\JefeDepartamentoController@index');
//Sectimo en existir
Route::get('Estatus', 'App\Http\Controllers\EstatusController@index');