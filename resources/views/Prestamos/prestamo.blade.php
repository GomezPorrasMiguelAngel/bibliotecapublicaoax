@extends('layouts.app')
@section('htmlheader_title', 'Prestamos')
@section('main-content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<html>
    <body>
        <div class="container">
            <header>
                <div class="mb-3 center">
                    <h2 class="form-title text-center text-primary">Prestamos</h2>                
                </div>
            </header>
            <main>
                <div id="content-table">
                    <table class="table table-striped" >
                        <thead>
                            <tr>
                                                           
                                <td>Libro</td>
                                <td>Usuario</td>
                                <td>Fecha Prestamo</td>
                                <td>Fecha Devolucion</td>
                                <td>Fecha Entrega</td>
                                <td>Observaciones</td>
                                <td colspan="2" align="center"> Accion </td>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach ($prestamoLibro as $c)
                            <tr>
                                {{--  <td>{{ $c->id }}</td>  --}}
                                <td>{{ $c->titulo}}</td>
                                <td>{{ $c->nombre }}</td>
                                <td>{{ $c->fechaPrestamo }}</td>
                                <td>{{ $c->fechaDev }}</td>
                                <td>{{ $c->fechaEntrega }}</td>
                                <td>{{ $c->observaciones }}</td>
                                <td>
                                        {{--  {!!Form::open(array('url'=>'actualizarP/'.$c->id,'method'=>'PUT','autocomplete'=>'off'))!!}
                                        {!!form::submit('Actualizar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Actualizar</span>'])!!}
                                        {!!Form::close()!!}  --}}
                                        <div class="form-group form-button ">
                                            <a href="actualizarP/{{$c -> id }}" class="btn btn-warning float-right" role="button">Editar</a>
                                    </div>
                                </td>
                                  <td>
                                        {!!Form::open(array('url'=>'eliminar_datosP/'.$c->id,'method'=>'PUT','autocomplete'=>'off'))!!}
                                        {!!form::submit('Eliminar',['class'=>'btn btn-danger','name'=>'eli','id'=>'eli','content'=>'<span>Eliminar</span>'])!!}
                                        {!!Form::close()!!}       
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </main>
            <div class="form-group form-button ">
                    <a href="registro_plibro" class="btn btn-primary float-right" role="button">Nuevo Registro</a>
            </div>
        </body>
        </html>
@endsection