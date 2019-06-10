@extends('layouts.app')
@section('htmlheader_title','Registrar Usuarios')
@section('main-content')   
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">{{ __('Registrar Usuario') }}</h2>
                    <form method="POST" action="registrar_ulibro">
                        @csrf

                        <div class="form-group">
                                <label for="nombre"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" placeholder="{{ __('Nombre') }}" required autofocus>                               
                        </div>

                        <div class="form-group">
                            <label for="apePat"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input id="apePat" type="text" class="form-control{{ $errors->has('apePat') ? ' is-invalid' : '' }}" name="apePat" value="{{ old('apePat') }}" placeholder="{{ __('Apellido paterno') }}" required autofocus>                            
                        </div>

                        <div class="form-group">
                            <label for="apeMat"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input id="apeMat" type="text" class="form-control{{ $errors->has('apeMat') ? ' is-invalid' : '' }}" name="apeMat" value="{{ old('apeMat') }}" placeholder="{{ __('Apellido materno') }}" required autofocus>                      
                        </div>

                         <div class="form-group">
                            <label for="domicilio"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input id="domicilio" type="text" class="form-control{{ $errors->has('domicilio') ? ' is-invalid' : '' }}" name="domicilio" value="{{ old('domicilio') }}" placeholder="{{ __('Domicilio') }}" required autofocus>                      
                        </div>

                        <div class="form-group">
                            <label for="telefono"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input id="telefono" type="text" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" placeholder="{{ __('Telefono') }}" required autofocus>                      
                        </div>

                        <div class="form-group form-button">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="images/libros.png" ></figure>
                </div>
            </div>
        </div>
@endsection
 @section('scripts')
<script>
var msg = '{{Session::get('alert')}}';
var exist = '{{Session::has('alert')}}';

if(exist){
window.alert = function() {
   modal=$ ('<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"> <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> Accion exitosa...!!</h3> </div><div class="modal-body"></div>  <div class="modal-footer"><a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a> </div></div></div></div>');
   
    modal.find(".modal-body").text(arguments[0]);
    modal.modal('show');
  };
alert(msg);
}
</script>
@endsection

