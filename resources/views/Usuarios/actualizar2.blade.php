@extends('layouts.app')
@section('htmlheader_title','Actualizar')
@section('main-content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">{{ __('Actualizar Usuario') }}</h2>

           			 {!!Form::open(array('url'=>'actualizarp/'.$var1->id,'method'=>'PUT','autocomplete'=>'off','class'=>'form'))!!}

					 <h4 style="font-weight: bold;">{{ __('Nuevo nombre:') }}</h4>
					{!!form::text('name',$var1->name)!!}				 
					 <br>  
					 <h4 style="font-weight: bold;">{{ __('Nuevo apellido paterno:') }}</h4>
					{!!form::text('apePat',$var1->apePat)!!} 
					 <br>  
					 <h4 style="font-weight: bold;">{{ __('Nuevo apellido materno:') }}</h4>
					{!!form::text('apeMat',$var1->apeMat)!!}
					<br>
					<h4 style="font-weight: bold;">{{ __('Nuevo correo electronico:') }}</h4>
					{!!form::text('email',$var1->email)!!}
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

