@extends('layouts.app')
@section('main-content')
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>BUSCAR LIBRO</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">
  </head>
  {{-- load jquery --}}
  <script src="js/jquery.min.js"></script>
  {{-- load ajax file (function to get estantes) --}}
  <script src="js/buscar.js"></script>
  <body>
    <div class="container">
        <header>
            <div class="mb-3">
                <h1>Buscar</h1>
            </div>


              <div class="mb-3">

                <input class="form-control" aria-label="Search" name="input-buscador" id="input-buscador" placeholder="Ingresa el nombre del libro o del autor">
                {{-- <input type="submit" value="BUSCAR" style='width:200px; height:40px'> --}}
              </div>

          </header>
          <main>
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
                  <tbody>
                    @foreach($libros as $l)
                      <tr>
                        <td>{{ $l->titulo }}</td>
                        <td>{{ $l->genero }}</td>
                        <td>{{ $l->editorial }}</td>
                        <td>{{ $l->anio }}</td>
                        <td>{{ $l->nuPaginas }}</td>
                        <td>{{ $l->autor }}</td>
                        <td>{{ $l->lugar }}</td>

                      </tr>
                    @endforeach
                  </tbody>
                </table>
                {!!$libros->render()!!}
              </div>
          </main>
        </body>
    </div>

</html>
@endsection