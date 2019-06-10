<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function ver_tabla(){
        $vertodo = Usuario::get();
        return view('Usuarios/usuario')
        ->with('usuario',$vertodo);
    }

    public function eliminar_datos(Request $data,$id){
        $editar = Usuario::find($id);
        $editar->id = $data->id;
        $editar->name = $data->name;
        $editar->apePat = $data->apePat;
        $editar->apeMat = $data->apeMat;
        $editar->email = $data->email;
        $editar->delete();
        return redirect()->to('vertabla');
    }

    public function actualizar(Request $data,$id){
        $editar = Usuario::find($id);
        $editar->name = $data->name;
        $editar->apePat = $data->apePat;
        $editar->apeMat = $data->apeMat;
        $editar->email = $data->email;
        $editar->save();
        return redirect()->to('vertabla');
    }

    public function edit_datos($id){
        $var1 = Usuario::where('id',$id)->take(1)->first();
        return view('Usuarios/actualizar2')->with('var1',$var1); 
    }

}