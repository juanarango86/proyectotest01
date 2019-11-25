<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Cliente;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ClienteFormRequest;
use DB;

class ClienteController extends Controller
{
    
//Definir el Constructor
    public function __construct()
    {
        
    }

    public function index(Request $request)
    {
     
            
        return view("Cliente.index");
    }

       

    public function create()
    {
        return view("Cliente.create");
      /*  echo "test"; */
    }

    public function store (ClienteFormRequest $request)
    {
        $cliente = new Cliente;
        $cliente ->id=$request->get('Id_Cliente');
        $cliente ->nombre=$request->get('Nombre');
        $cliente->descripcion=$request->get ('Descripcion');
        $cliente->telefono=$request->get ('Telefono');
        $cliente->celular=$request->get ('Celular');
        $cliente->direccion=$request->get ('Direccion');
        $cliente->email=$request->get ('Correo_Electronico');
        $cliente->save();
        return Redirect::to('Cliente');
    }
    
     
    public function edit($id)
    {
        return view ("Cliente.show",["cliente"=>Cliente::findOrFail($id)]);
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function show ($id)
{
    //return view ("Cliente.show");
}
}

