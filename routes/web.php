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

<<<<<<< HEAD
Route::post('/proyectos',['as'=>'proyectosstore','uses'=>'ProyectoController@store']);
Route::resource('Proyecto','ProyectoController');
Route::get('Proyectos/{Id_Proyecto}/edit',['as'=>'proyectoedit', 'uses'=>'ProyectoController@edit']);
Route::put('Proyectos/{Id_Proyecto}',['as'=>'proyectoupdate', 'uses'=>'ProyectoController@update']);
Route::get('Proyectos/listado',['as'=>'proyectoslistado', 'uses'=>'ProyectoController@index']);
Route::delete('Proyectos/{Id_Proyecto}',['as'=>'proyectodelete', 'uses'=>'ProyectoController@destroy']);
=======
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
>>>>>>> 184a9b6ab64c4425a7ee6e8300dc88839e1faf0b


Route::post('/clientes',['as'=>'clientesstore','uses'=>'ClienteController@store']);
<<<<<<< HEAD
Route::resource('Cliente','ClienteController');
=======

>>>>>>> 184a9b6ab64c4425a7ee6e8300dc88839e1faf0b
Route::get('Clientes/{Id_Cliente}/edit',['as'=>'clienteedit', 'uses'=>'ClienteController@edit']);
Route::put('Clientes/{Id_Cliente}',['as'=>'clienteupdate', 'uses'=>'ClienteController@update']);
Route::get('Clientes/listado',['as'=>'clienteslistado', 'uses'=>'ClienteController@index']);
Route::delete('Clientes/{Id_Cliente}',['as'=>'clientedelete', 'uses'=>'ClienteController@destroy']);


<<<<<<< HEAD
Route::post('/tipo_de_poblacions',['as'=>'tipo_de_poblacionsstore','uses'=>'Tipo_de_poblacionController@store']);
Route::resource('Tipo_de_poblacion','Tipo_de_poblacionController');
Route::get('Tipo_de_poblacions/{Id_Tipo_De_Poblacion}/edit',['as'=>'tipo_de_poblacionedit', 'uses'=>'Tipo_de_poblacionController@edit']);
Route::put('Tipo_de_poblacion/{Id_Tipo_De_Poblacion}',['as'=>'tipo_de_poblacionupdate', 'uses'=>'Tipo_de_poblacionController@update']);
Route::get('Tipo_de_poblacions/listado',['as'=>'tipo_de_poblacionslistado', 'uses'=>'Tipo_de_poblacionController@index']);
Route::delete('Tipo_de_poblacions/{Id_Tipo_De_Poblacion}',['as'=>'tipo_de_poblaciondelete', 'uses'=>'Tipo_de_poblacionController@destroy']);


Route::post('/encuestas',['as'=>'encuestasstore','uses'=>'EncuestaController@store']);
Route::resource('Encuesta','EncuestaController');
Route::get('Encuestas/{Id_Encuesta}/edit',['as'=>'encuestaedit', 'uses'=>'EncuestaController@edit']);
Route::put('Encuesta/{Id_Encuesta}',['as'=>'encuestaupdate', 'uses'=>'EncuestaController@update']);
Route::get('Encuestas/listado',['as'=>'encuestaslistado', 'uses'=>'EncuestaController@index']);
Route::delete('Encuestas/{Id_Encuesta}',['as'=>'encuestadelete', 'uses'=>'EncuestaController@destroy']);


Route::post('/formularios',['as'=>'formulariosstore','uses'=>'FormularioController@store']);
Route::resource('Formulario','FormularioController');
Route::get('Formularios/{Id_Formulario}/edit',['as'=>'formularioedit', 'uses'=>'FormularioController@edit']);
Route::put('Formulario/{Id_Formulario}',['as'=>'formularioupdate', 'uses'=>'FormularioController@update']);
Route::get('Formularios/listado',['as'=>'formularioslistado', 'uses'=>'FormularioController@index']);
Route::delete('Formularios/{Id_Formulario}',['as'=>'formulariodelete', 'uses'=>'FormularioController@destroy']);


=======
<<<<<<< qryeison

Route::post('/tipo_de_poblacion',['as'=>'tipo_de_poblacionsstore','uses'=>'Tipo_de_poblacionController@store']);

Route::resource('Tipo_de_poblacion','Tipo_de_poblacionController');

Route::get('Tipo_de_poblacion/{Id_Tipo_De_Poblacion}/edit',['as'=>'tipo_de_poblacionedit', 'uses'=>'Tipo_de_poblacionController@edit']);

Route::put('Tipo_de_poblacion/{Id_Tipo_De_Poblacion}',['as'=>'tipo_de_poblacionupdate', 'uses'=>'Tipo_de_poblacionController@update']);

Route::get('Tipo_de_poblacion/listado',['as'=>'tipo_de_poblacionslistado', 'uses'=>'Tipo_de_poblacionController@index']);

Route::delete('Tipo_de_poblacion/{Id_Tipo_De_Poblacion}',['as'=>'tipo_de_poblaciondelete', 'uses'=>'Tipo_de_poblacionController@destroy']);

=======
  
  
>>>>>>> master
>>>>>>> 184a9b6ab64c4425a7ee6e8300dc88839e1faf0b
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('redirect', function()
{

    alert()->success('Success Message', 'Optional Title');

    return redirect('/home');
});
