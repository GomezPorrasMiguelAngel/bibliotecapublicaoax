<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Libro;

class BuscadorControlador extends Controller
{
    public function buscar_view()
    {
        $libros = Libro::join('estante', 'libro.lugar', '=', 'estante.idEstante')
        ->select('libro.idLibro', 'libro.titulo', 'libro.genero', 'libro.editorial', 'libro.anio', 'libro.nuPaginas', 'libro.autor', 'estante.nombre as lugar')
        ->paginate(5);
        return view('buscar')->with('libros', $libros);
    }
    public function buscar()
    {
        $connect = mysqli_connect("localhost", "root", "", "biblioteca", "3306");
        $output = '';
        if (isset($_POST["query"])) {
            $search = mysqli_real_escape_string($connect, $_POST["query"]);
            $query = "
                        SELECT  l.idLibro,l.titulo,l.genero,l.editorial,l.anio,l.nuPaginas,l.autor, e.nombre as lugar
                        FROM libro l
                            INNER JOIN estante e
                                ON l.lugar = e.idEstante
                                WHERE idLibro LIKE '%" . $search . "%'
                                                OR titulo LIKE '%" . $search . "%'
                                                OR autor LIKE '%" . $search . "%'
                                                OR anio LIKE '%" . $search . "%'
                                                OR genero LIKE '%" . $search . "%'
                                                OR editorial LIKE '%" . $search . "%'
                                                OR lugar LIKE '%" . $search . "%'
                        ";
        } else {
            $query = "
                        SELECT  l.idLibro,l.titulo,l.genero,l.editorial,l.anio,l.nuPaginas,l.autor, e.nombre as lugar
                        FROM libro l
                            INNER JOIN estante e
                                ON l.lugar = e.idEstante ORDER BY idLibro
                        ";
        }
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
            $output .= '
                        <div id="content-table">
                        <table class="table table-striped table-bordered table-sm" style="text-align:center;">
                            <thead>
                                <tr style="background-color:#0097a7;color:white">

                                    <th>Titulo </th>
                                    <th>Genero </th>
                                    <th>Editorial </th>
                                    <th>Año </th>
                                    <th>Paginas</th>
                                    <th>Autor </th>
                                    <th>Lugar </th>

                                </tr>
                            </thead>
                        ';
            while ($row = mysqli_fetch_array($result)) {
                $output .= '
                            <tr>
                                <td>' . $row["titulo"] . '</td>
                                <td>' . $row["genero"] . '</td>
                                <td>' . $row["editorial"] . '</td>
                                <td>' . $row["anio"] . '</td>
                                <td>' . $row["nuPaginas"] . '</td>
                                <td>' . $row["autor"] . '</td>
                                <td>' . $row["lugar"] . '</td>
                            </tr>
                            ';
            }
            echo $output;
        } else {
            echo 'Libro no encontrado';
        }
    }
}
