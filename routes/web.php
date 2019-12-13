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
    return view('auth.login');
});
//proyectos
Route::resource('Proyecto','ProyectoController');

Route::post('/proyectos',['as'=>'proyectosstore','uses'=>'ProyectoController@store']);

Route::get('Proyectos/{Id_Proyecto}/edit',['as'=>'proyectoedit', 'uses'=>'ProyectoController@edit']);

Route::put('Proyectos/{Id_Proyecto}',['as'=>'proyectoupdate', 'uses'=>'ProyectoController@update']);

Route::get('Proyectos/listado',['as'=>'proyectoslistado', 'uses'=>'ProyectoController@index']);

Route::delete('Proyectos/{Id_Proyecto}',['as'=>'proyectodelete', 'uses'=>'ProyectoController@destroy']);


//clientes

Route::resource('Cliente','ClienteController');

Route::post('/clientes',['as'=>'clientesstore','uses'=>'ClienteController@store']);

Route::get('Clientes/{Id_Cliente}/edit',['as'=>'clienteedit', 'uses'=>'ClienteController@edit']);

Route::put('Clientes/{Id_Cliente}',['as'=>'clienteupdate', 'uses'=>'ClienteController@update']);

Route::get('Clientes/listado',['as'=>'clienteslistado', 'uses'=>'ClienteController@index']);

Route::delete('Clientes/{Id_Cliente}',['as'=>'clientedelete', 'uses'=>'ClienteController@destroy']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('redirect', function()
{

    alert()->success('Success Message', 'Optional Title');

    return redirect('/home');
});
