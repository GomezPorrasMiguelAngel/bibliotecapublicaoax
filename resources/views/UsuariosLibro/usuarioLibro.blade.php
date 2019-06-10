@extends('layouts.app')
@section('htmlheader_title', 'Usuarios')
@section('main-content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<html>
    <body>
        <div class="container">
            <header>
                <div class="mb-3 center">
                    <h2 class="form-title text-center text-primary">Lista de usuarios</h2>                
                </div>
            </header>
            <main>
                <div id="content-table">
                    <table class="table table-striped" >
                        <thead>
                            <tr>
                                {{--  <td>id</td>  --}}
                                <td>Nombre</td>
                                <td>Apellido paterno</td>
                                <td>Apellido materno</td>
                                <td>Domicilio</td>
                                <td>Telefono</td>
                                <td colspan="2" align="center"> Accion </td>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach ($usuarioLibro as $c)
                            <tr>
                                {{--  <td>{{ $c->id }}</td>  --}}
                                <td>{{ $c->nombre }}</td>
                                <td>{{ $c->apePat }}</td>
                                <td>{{ $c->apeMat }}</td>
                                <td>{{ $c->domicilio }}</td>
                                <td>{{ $c->telefono }}</td>
                                <td>
                                        {{--  {!!Form::open(array('url'=>'actualizarL/'.$c->id,'method'=>'PUT','autocomplete'=>'off'))!!}
                                        {!!form::submit('Actualizar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Actualizar</span>'])!!}
                                        {!!Form::close()!!}  --}}
                                        <div class="form-group form-button ">
                                            <a href="actualizarL/{{$c -> id }}" class="btn btn-warning float-right" role="button">Editar</a>
                                    </div>
                                </td>
                                <td>
                                        {!!Form::open(array('url'=>'eliminar_datosL/'.$c->id,'method'=>'PUT','autocomplete'=>'off'))!!}
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
                    <a href="registro_ulibro" class="btn btn-primary float-right" role="button">Nuevo usuario</a>
            </div>
        </body>
        </html>
@endsection