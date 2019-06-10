@extends('layouts.app')
@section('htmlheader_title','Actualizar')
@section('main-content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">


<div class="container">
    <div class="signup-content">
        <div class="signup-form">
        <h2 class="form-title">{{ __('Actualizar Prestamo') }}</h2>

        {!!Form::open(array('url'=>'actualizarpP/'.$var1->id,'method'=>'PUT','autocomplete'=>'off','class'=>'form'))!!}
		
        <h4 style="font-weight: bold;">{{ __('Nuevo Libro:') }}</h4>
        @csrf 
		{!!form::text('libro',$var1->titulo,array('disabled'))!!}		
		 <br>  
        <h4 style="font-weight: bold;">{{ __('Nuevo usuario:') }}</h4>
        
		{!!form::text('usuarioLibro',$var1->nombre,array('disabled'))!!} 
		 <br>  		 
        <h4 style="font-weight: bold;">{{ __('Nueva fecha de prestamo:') }}</h4>
		{!!form::date('fechaPrestamo',$var1->fechaPrestamo)!!}
		<br>  
		 <h4 style="font-weight: bold;">{{ __('Nueva fecha de devolucion:') }}</h4>
		{!!form::date('fechaDev',$var1->fechaDev)!!}
		<br>  		
		<h4 style="font-weight: bold;">{{ __('Nueva fecha de entrega:') }}</h4>
		{!!form::date('fechaEntrega',$var1->fechaEntrega)!!}
		<br>
		<h4 style="font-weight: bold;">{{ __('Nueva observacion:') }}</h4>
		{!!form::text('observaciones',$var1->observaciones)!!}
		<br>
		{!!form::submit('Actualizar',[ 'class'=>'btn btn-primary','name'=>'grabar','id'=>'grabar','content'=>'<span>Actualizar</span>'])!!}
		{!!Form::close()!!}
		            
		</div>
		<div class="signup-image">
            <figure><img src="/images/signup-image.jpg" ></figure>
        </div>
	</div>
</div>

@endsection
@section('scripts')
 
 	
 <script src="{{ asset('js/cargar_libros.js') }}"></script>
 </script>
@endsection



