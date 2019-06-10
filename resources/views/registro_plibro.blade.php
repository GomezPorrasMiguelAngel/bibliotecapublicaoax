@extends('layouts.app')
@section('htmlheader_title','Registrar Prestamo')
@section('main-content')   
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">{{ __('Registrar Prestamo') }}</h2>
                    <form method="POST" action="registrar_plibro">
                        @csrf
                        <div class="form-group">
                            <label ><i class="zmdi zmdi-book zmdi-hc-fw"></i>Libro</label><br></br>  
                            <select name="libro" id="libro" class="form-control select2" style="width: 100%;">
                                <option value="" disabled>Elija un libro</option>
                            </select>
                        </div>


                         <div class="form-group">
                            <label for="fechaPrestamo"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Usuario</label><br></br>  
                            <select name="usuarioLibro" id="usuarioLibro" class="form-control select2" style="width: 100%;">
                                <option value="" disabled>Elija un usuario</option>
                            </select>
                        </div>

                        <div class="form-group">  
                            <label for="fechaPrestamo"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Fecha Prestamo</label><br></br>                                                  
                            <input id="fechaPrestamo" type="date" class="form-inline" name="fechaPrestamo" value="{{ old('fechaPrestamo') }}" placeholder="{{ __('Fecha Prestamo') }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="fechaDev"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Fecha Devolucion</label><br></br> 
                            <input id="fechaDev" type="date" class="form-inline" name="fechaDev" value="{{ old('fechaDev') }}" placeholder="{{ __('Fecha Devolucion') }}" required autofocus>

                        </div>

                        <div class="form-group">
                            <label for="fechaEntrega"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Fecha Entrega</label><br></br> 
                            <input id="fechaEntrega" type="date" class="form-inline" name="fechaEntrega" value="{{ old('fechaEntrega') }}" placeholder="{{ __('Fecha Entrega') }}" required autofocus>

                        </div>

                        <div class="form-group">
                            <label for="observaciones"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Observaciones</label><br></br>>
                            <input id="observaciones" type="text" class="form-inline" name="observaciones" value="{{ old('observaciones') }}" placeholder="{{ __('Observaciones') }}" required autofocus>

                        </div>                    

                        <div class="form-group form-button">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Registrar') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><br><img src="images/libros.png" ></figure>
                </div>
            </div>
        </div>
@endsection
@section('scripts')
 <script src="{{ asset('js/cargar_libros.js') }}"></script>
 <script src="{{ asset('js/cargar_usuarios.js') }}"></script>
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

