<?php

namespace App\Http\Controllers;

use App\Encuesta;
use Illuminate\Http\Request;
use App\Http\Requests\EncuestaFormRequest;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class EncuestaController extends Controller
{

    public function index(Request $request)
    {

        $encuestas=Encuesta::orderBy('Id_Encuesta','DESC')->paginate();
        return view('Encuesta.index',compact('encuestas'));
    }

    public function create()
    {

        return view('Encuesta.create',['encuesta'=>new Encuesta()]);
    }


    public function store(EncuestaFormRequest $request)
    {

        $encuesta= new Encuesta();
        $encuesta->Id_Proyecto=$request->input('id_Proyecto');
        $encuesta->Estado=$request->input('estado');   
        $encuesta->Id_Formulario=$request->input('id_Formulario');        
        $encuesta->save();

        return redirect()->route('Encuesta.index')->with('success','Registro creado satisfactoriamente');
    }      

    public function show($id)
    {

        $encuestas=Encuesta::find($id);
        return view('Encuesta.index',compact('encuestas'));
    
    }

    public function edit($Id_Encuesta)
    {

        $encuesta=Encuesta::where('Id_Encuesta',$Id_Encuesta)->first();
        return view('Encuesta.edit',compact('encuesta'));
    }

    public function update(EncuestaFormRequest $request, $Id_Encuesta)
    {

        $encuesta=Encuesta::where('Id_Encuesta', $Id_Encuesta)->update([


        'Id_Proyecto'=>$request->id_Proyecto,
        'Estado'=>$request->estado,
        'Id_Formulario'=>$request->id_Formulario,
        
        ]);

        return redirect()->route('encuestaslistado');

    }


    public function destroy(Encuesta $encuesta, $Id_Encuesta)
    {

        $encuesta=Encuesta::where('Id_Encuesta',$Id_Encuesta)->delete();
        return redirect()->route('encuestaslistado');

    }
}
