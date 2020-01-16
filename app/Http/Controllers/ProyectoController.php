<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;
/* use App\Http\Controllers\Controller; */
use App\Http\Requests\ProyectoFormRequest;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $proyectos=Proyecto::orderBy('Id_Proyecto','DESC')->paginate();
        return view('Proyecto.index',compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Proyecto.create',['proyecto'=>new Proyecto()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(ProyectoFormRequest $request)
    {

<<<<<<< HEAD
        $proyecto= new Proyecto();
        /* $cliente->cedula=$request->input('cedula');  */
        $proyecto->Nombre=$request->input('nombre');
        $proyecto->Descripcion=$request->input('descripcion');   
        $proyecto->Id_Cliente=$request->input('id_cliente');   
        $proyecto->Cantidad_De_Encuestas=$request->input('cantidad_de_encuestas');   
        $proyecto->Id_Tipo_De_Poblacion=$request->input('id_tipo_poblacion'); 
        $proyecto->save();
=======
       /*  $proyecto= new Proyecto(); */
       /*  $cliente->cedula=$request->input('cedula'); */
      /*   $proyecto->Nombre=$request->input('nombre_proyecto');
        $proyecto->Descripcion=$request->input('descripcion');   
        $proyecto->Id_Cliente=$request->input('id_cliente');   
        $proyecto->Cantidad_De_Encuestas=$request->input('cantidad_de_encuestas');   
        $proyecto->Id_Tipo_De_Poblacion=$request->input('id_tipo_poblacion'); */
        
       /*  $proyecto->save(); */
>>>>>>> 184a9b6ab64c4425a7ee6e8300dc88839e1faf0b

     /*  echo $request ->input('cedula'). $request->input('nombre').$request->input('descripcion').$request->input('telefono'). $request->input('celular').$request->input('direccion').$request->input('correo');
 */
      /*   var_dump($request); */

<<<<<<< HEAD
        return redirect()->route('proyectoslistado')->with('success','Registro creado satisfactoriamente');
   
/*    return view("Proyecto.index"); */
=======
       /*  return redirect()->route('proyectosslistado')->with('success','Registro creado satisfactoriamente'); */
   
   return view("Proyecto.index");
>>>>>>> 184a9b6ab64c4425a7ee6e8300dc88839e1faf0b
    }      


        //
       /*  $this->validate($request,['Nombre'=>'required', 'Descripcion'=>'required', 'telefono'=>'required', 
        'celular'=>'required', 'direccion'=>'required', 'correo'=>'required']);
        Cliente::create($request->all());
        return redirect()->route('Cliente.index')->with('success','Registro creado satisfactoriamente');
    */ 
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
<<<<<<< HEAD
        $proyectos=Proyecto::find($id);
        return view('Proyecto.index',compact('proyectos'));
=======
        $proyecto=Proyecto::find($id);
        return view('Proyecto.index',compact('proyecto'));
>>>>>>> 184a9b6ab64c4425a7ee6e8300dc88839e1faf0b
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_Proyecto)
    {
        //
        $proyecto=Proyecto::where('Id_Proyecto',$Id_Proyecto)->first();
        return view('Proyecto.edit',compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProyectoFormRequest $request, $Id_Proyecto)
    {
        //
       /*  $this->validate($request,['nombre'=>'required', 'descripcion'=>'required', 'telefono'=>'required', 'celular'=>'required', 'correo'=>'required']);
  */

       /*  Cliente::find($id)->update($request->all());
        return redirect()->route('Cliente.index')->with('success','Registro actualizado satisfactoriamente');
  */
        $proyecto=Proyecto::where('Id_Proyecto', $Id_Proyecto)->update([


        'Nombre_Proyecto'=>$request->nombre,
        'Descripcion'=>$request->descripcion,
        'Id_Cliente'=>$request->id_cliente,
        'Cantidad_De_Encuestas'=>$request->cantidad_encuestas,
        'Id_Tipo_De_Poblacion'=>$request->tipo_poblacion,
        
        
        ]);

        return redirect()->route('proyectoslistado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Proyecto $proyecto, $Id_Proyecto)
    {
        //
        $proyecto=Proyecto::where('Id_Proyecto',$Id_Proyecto)->delete();
        return redirect()->route('proyectoslistado');
        /* return redirect()->route('Cliente.index')->with('success','Registro eliminado satisfactoriamente');
     */
    }
}
