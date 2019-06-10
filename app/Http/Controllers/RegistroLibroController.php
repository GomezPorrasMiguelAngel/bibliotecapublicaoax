<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Libro;
use App\Models\Estante;

class RegistroLibroController extends Controller
{
    public function register_book(Request $request)
    {
        $book_title = $request->input('book-title');
        $book_category = $request->input('book-category');
        $book_editorial = $request->input('book-editorial');
        $book_year = $request->input('book-year');
        $book_pages = $request->input('book-pages');
        $book_author = $request->input('book-author');
        $book_lugar = $request->input('book-lugar');

        $nuevo_libro = Libro::create(['titulo' => $book_title, 'genero' => $book_category, 'editorial' => $book_editorial, 'anio' => $book_year, 'nuPaginas' => $book_pages, 'autor' => $book_author, 'lugar' => $book_lugar]);
        if (!$nuevo_libro->exists) {
            return redirect()->back()->with('alert', 'Lo sentimos algo salio mal');
        } else {
            return redirect()->back()->with('alert', 'Libro registrado correctamente');
        }
    }

    public function listado_estantes()
    {
        $estantes = Estante::select('idEstante', 'nombre')->get();
        return $estantes;
    }
}
