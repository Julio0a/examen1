<?php

namespace App\Http\Controllers;
use App\Models\Directorio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DirectorioController extends Controller
{
    public function mostrar(){
        $directorios = Directorio::all();
        return view('directorio', compact('directorio'));
    }

    public function crearContacto(){
        return view('crearEntrada');



    }

    public function guardar(Request $request){
        $nvoDirectorio = new Directorio();
        $nvoDirectorio->nombre = $request->nombre;
        $nvoDirectorio->nombre = $request->nombre;
        $nvoDirectorio->apellido = $request->apellido;
        $nvoDirectorio->telefono =$request->telefono;
        $nvoDirectorio->correo = $request->correo;
        $nvoDirectorio->save();

        return redirect('/directorio/mostrar');
    }
    public function eliminar($id){
        $directorioEliminar = Directorio::find($id);
        return view('eliminar', compact('productoEliminar'));
    }

}
