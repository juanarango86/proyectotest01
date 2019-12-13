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

<<<<<<< qryeison
  
Route::resource('Proyecto','ProyectoController');
=======
Route::post('/proyectos',['as'=>'proyectosstore','uses'=>'ProyectoController@store']);

Route::get('Proyectos/{Id_Proyecto}/edit',['as'=>'proyectoedit', 'uses'=>'ProyectoController@edit']);

Route::put('Proyectos/{Id_Proyecto}',['as'=>'proyectoupdate', 'uses'=>'ProyectoController@update']);

Route::get('Proyectos/listado',['as'=>'proyectoslistado', 'uses'=>'ProyectoController@index']);

Route::delete('Proyectos/{Id_Proyecto}',['as'=>'proyectodelete', 'uses'=>'ProyectoController@destroy']);


//clientes
>>>>>>> master

Route::post('/clientes',['as'=>'clientesstore','uses'=>'ClienteController@store']);

Route::resource('Cliente','ClienteController');

Route::post('/clientes',['as'=>'clientesstore','uses'=>'ClienteController@store']);

Route::get('Clientes/{Id_Cliente}/edit',['as'=>'clienteedit', 'uses'=>'ClienteController@edit']);

Route::put('Clientes/{Id_Cliente}',['as'=>'clienteupdate', 'uses'=>'ClienteController@update']);

Route::get('Clientes/listado',['as'=>'clienteslistado', 'uses'=>'ClienteController@index']);

Route::delete('Clientes/{Id_Cliente}',['as'=>'clientedelete', 'uses'=>'ClienteController@destroy']);


<<<<<<< qryeison

Route::post('/tipo_de_poblacion',['as'=>'tipo_de_poblacionsstore','uses'=>'Tipo_de_poblacionController@store']);

Route::resource('Tipo_de_poblacion','Tipo_de_poblacionController');

Route::get('Tipo_de_poblacion/{Id_Tipo_De_Poblacion}/edit',['as'=>'tipo_de_poblacionedit', 'uses'=>'Tipo_de_poblacionController@edit']);

Route::put('Tipo_de_poblacion/{Id_Tipo_De_Poblacion}',['as'=>'tipo_de_poblacionupdate', 'uses'=>'Tipo_de_poblacionController@update']);

Route::get('Tipo_de_poblacion/listado',['as'=>'tipo_de_poblacionslistado', 'uses'=>'Tipo_de_poblacionController@index']);

Route::delete('Tipo_de_poblacion/{Id_Tipo_De_Poblacion}',['as'=>'tipo_de_poblaciondelete', 'uses'=>'Tipo_de_poblacionController@destroy']);

=======
  
  
>>>>>>> master
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('redirect', function()
{

    alert()->success('Success Message', 'Optional Title');

    return redirect('/home');
});
