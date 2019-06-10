@extends('layouts.app')
@section('htmlheader_title','Actualizar')
@section('main-content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<div class="container">
         <div class="signup-content">
            <div class="signup-form">
               <h2 class="form-title">{{ __('Actualizar Usuario') }}</h2>

           			 {!!Form::open(array('url'=>'actualizarpL/'.$var1->id,'method'=>'PUT','autocomplete'=>'off','class'=>'form'))!!}

					<h4 style="font-weight: bold;">{{ __('Nuevo nombre:') }}</h4>  
					{!!form::text('nombre',$var1->nombre)!!}
					<br>
					<h4 style="font-weight: bold;">{{ __('Nuevo apellido paterno:') }}</h4>  
					{!!form::text('apePat',$var1->apePat)!!} 
					<br>  
					<h4 style="font-weight: bold;">{{ __('Nuevo apellido materno:') }}</h4>
					{!!form::text('apeMat',$var1->apeMat)!!}
					<br>  					
					<h4 style="font-weight: bold;">{{ __('Nuevo domicilio:') }}</h4>
					{!!form::text('domicilio',$var1->domicilio)!!}
					<br>  
					<h4 style="font-weight: bold;">{{ __('Nuevo telefono:') }}</h4>
					{!!form::text('telefono',$var1->telefono)!!}
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

