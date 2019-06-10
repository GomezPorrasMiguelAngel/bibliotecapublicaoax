<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UsuarioLibro;

class UsuarioLibroController extends Controller
{
    public function ver_tablaL(){
        $vertodo = UsuarioLibro::get();
        return view('UsuariosLibro/usuarioLibro')
        ->with('usuarioLibro',$vertodo);
    }

    public function eliminar_datosL(Request $data,$id){
        $editar = UsuarioLibro::find($id);
        $editar->id = $data->id;
        $editar->nombre = $data->nombre;
        $editar->apePat = $data->apePat;
        $editar->apeMat = $data->apeMat;
        $editar->domicilio = $data->domicilio;
        $editar->telefono = $data->telefono;
        $editar->delete();
        return redirect()->to('vertablaL');
    }

    public function actualizarL(Request $data,$id){
        $editar = UsuarioLibro::find($id);
        $editar->nombre = $data->nombre;
        $editar->apePat = $data->apePat;
        $editar->apeMat = $data->apeMat;
        $editar->domicilio = $data->domicilio;
        $editar->telefono = $data->telefono;
        $editar->save();
        return redirect()->to('vertablaL');
    }

    public function edit_datosL($id){
        $var1 = UsuarioLibro::where('id',$id)->take(1)->first();
        return view('UsuariosLibro/actualizarLibro')->with('var1',$var1); 
    }

    public function register_ubook(Request $request)
    {
        $nombre = $request->input('nombre');
        $apePat = $request->input('apePat');
        $apeMat = $request->input('apeMat');
        $domicilio = $request->input('domicilio');
        $telefono = $request->input('telefono');

        $nuevo_ulibro = UsuarioLibro::create(['nombre' => $nombre, 'apePat' => $apePat, 'apeMat' => $apeMat, 'domicilio' => $domicilio, 'telefono' => $telefono]);
        if (!$nuevo_ulibro->exists) {
            return redirect()->back()->with('alert', 'Lo sentimos algo salio mal');
        } else {
            return redirect()->back()->with('alert', 'Usuario registrado correctamente');
        }
    }
}