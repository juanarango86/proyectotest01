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

Route::post('/clientes',['as'=>'clientesstore','uses'=>'ClienteController@store']);

Route::resource('Proyecto','ProyectoController');

Route::resource('Cliente','ClienteController');

Route::get('Clientes/{Id_Cliente}/edit',['as'=>'clienteedit', 'uses'=>'ClienteController@edit']);

Route::put('Clientes/{Id_Cliente}',['as'=>'clienteupdate', 'uses'=>'ClienteController@update']);

Route::get('Clientes/listado',['as'=>'clienteslistado', 'uses'=>'ClienteController@index']);

Route::delete('Clientes/{Id_Cliente}',['as'=>'clientedelete', 'uses'=>'ClienteController@destroy']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\SendMail($details));
   
    dd("Email is Sent.");
});

Route::get('redirect', function()
{

    alert()->success('Success Message', 'Optional Title');

    return redirect('/home');
});
