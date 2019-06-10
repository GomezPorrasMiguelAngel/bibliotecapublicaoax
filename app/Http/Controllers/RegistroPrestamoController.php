<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TelegramController;
use App\Models\Prestamo;
use App\Models\Libro;
use App\Models\UsuarioLibro;

class RegistroPrestamoController extends Controller
{
    /*public function ver_tablaP(){
        $vertodo = Prestamo::get();
        return view('Prestamos/prestamo')
        ->with('prestamoLibro',$vertodo);
    }*/
    public function ver_tablaP(){

        $vertodo = \DB::table('prestamol')
        ->join('libro','libro.idLibro','=','prestamol.libro')
        ->join('usuariolibro','usuariolibro.id','=','prestamol.usuarioLibro')
        ->select('prestamol.id','libro.titulo','usuariolibro.nombre','fechaPrestamo','fechaDev','fechaEntrega','observaciones')
        ->get();
        return view('Prestamos/prestamo')
        ->with('prestamoLibro',$vertodo);
    }

   
    public function actualizarP(Request $data,$id){
        $editar = Prestamo::find($id);
        $editar->id = $data->$id;
        $editar->libro = $data->libro;
        $editar->usuarioLibro = $data->usuarioLibro;
        $editar->fechaPrestamo = $data->fechaPrestamo;
        $editar->fechaDev = $data->fechaDev;
        $editar->fechaEntrega = $data->fechaEntrega;
        $editar->observaciones = $data->observaciones;
        $editar->save();
        return redirect()->to('vertablaP');
    }

    /*public function edit_datosP($id){
        $var1 = Prestamo::where('id',$id)->take(1)->first();
        return view('Prestamos/actualizarPrestamo')->with('var1',$var1); 
    }*/
     public function edit_datosP($id){
        $var1 = \DB::table('prestamol')
        ->join('libro','libro.idLibro','=','prestamol.libro')
        ->join('usuariolibro','usuariolibro.id','=','prestamol.usuarioLibro')
        ->select('prestamol.id','libro.titulo','usuariolibro.nombre','fechaPrestamo','fechaDev','fechaEntrega','observaciones')
        ->where('prestamol.id',$id)
        ->take(1)->first();
        return view('actualizarPrestamo')->with('var1',$var1); 
    }
    public function register_pbook(Request $request)
    {
        $libro = $request->input('libro');
        $usuarioLibro = $request->input('usuarioLibro');
        $fechaPrestamo = $request->input('fechaPrestamo');
        $fechaDev = $request->input('fechaDev');
        $fechaEntrega = $request->input('fechaEntrega');
        $observaciones = $request->input('observaciones');

        $nuevo_plibro = Prestamo::create(['libro' => $libro, 'usuarioLibro' => $usuarioLibro, 'fechaPrestamo' => $fechaPrestamo, 'fechaDev' => $fechaDev, 'fechaEntrega' => $fechaEntrega, 'observaciones' => $observaciones]);
        if (!$nuevo_plibro->exists) {
            return redirect()->back()->with('alert', 'Lo sentimos algo salio mal');
        } else {
            $var1 = \DB::table('libro')
            ->select('titulo')
            ->where('idLibro',$libro)
            ->get();
            $var2 = \DB::table('usuariolibro')
            ->select('nombre')
            ->where('id',$usuarioLibro)
            ->get();
             $text =  ' Ha registrado un prestamo del libro  '  ;
             $var3= $var1;
             $var4=$var2;
             $text2=$var4 . $text . $var3;

            \Telegram::sendMessage([
               'chat_id' => '-1001199328658.0',
               'parse_mode' => 'HTML',
               'text' => $text2 
            ]);
            return redirect()->back()->with('alert', 'Prestamo registrado correctamente');
        }
    }


     public function listado_libros()
    {
        $libro = Libro::select('idLibro', 'titulo', 'genero', 'editorial', 'anio', 'nuPaginas', 'autor', 'lugar')->get();
        return $libro;
    }
     public function usuarios()
    {
        $usuario = UsuarioLibro::select('id', 'nombre')->get();
        return $usuario;
    }
}