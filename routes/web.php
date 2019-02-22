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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tipocliente', 'TipoClienteController');
Route::get('tipocliente/{id}/destroy', [
    'uses'  =>  'TipoClienteController@destroy',
    'as'    =>  'tipocliente.destroy'
]);

Route::resource('departamentos', 'DepartamentosController');
Route::get('departamentos/{id}/destroy', [
    'uses'  =>  'DepartamentosController@destroy',
    'as'    =>  'departamentos.destroy'
]);

Route::resource('municipios', 'MunicipiosController');
Route::get('municipios/{id}/destroy', [
    'uses'  =>  'MunicipiosController@destroy',
    'as'    =>  'municipios.destroy'
]);

Route::resource('clientes', 'ClientesController');
Route::get('clientes/{id}/destroy', [
    'uses'  =>  'ClientesController@destroy',
    'as'    =>  'clientes.destroy'
]);