@extends('layouts.app')

@section('htmlheader_title','Home')

	
@section('main-content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<div class="container">    
        <header>
                <div class="contenedor1">
                        <h2>Biblioteca Pública Municipal No. 1565.</h2> 
                     <nav class="menu1">
                         <ul>
                             <li><a href="#" id="objetivos">Objetivos</a></li>
                             <li><a href="#" id="vision">Visión</a></li>
                             <li><a href="#" id="mision">Misión</a></li>
                             <li><a href="#" id="antecedentes">Antecedentes</a></li>
                         </ul>
                     </nav>
                </div>
        </header>
        <div class="slider">
                <ul>
                    <li>
        <img src="images/bannerbiblioteca.jpg" alt="">
        </li>
                    <li>
        <img src="images/bannerbiblioteca2.jpg" alt="">
        </li>
                    <li>
        <img src="images/bannerbiblioteca3.png" alt="">
        </li>
                    <li>
        <img src="images/bannerbiblioteca4.png" alt="">
        </li>
                </ul>
            </div>

            <header>
		<div class="contenedor1">
                <div id="micapa">
                    <h3>Objetivos</h3>
                       <h5>General</h5>
                       <p>
                           Facilitar recursos informativos y prestar servicios mediante diversos medios con el fin de cubrir las necesidades de personas y grupos de materia de instrucción, información y perfeccionamiento personal comprendidas actividades intelectuales de entretenimiento y ocio.
                       </p>
                       <h5>Específicos.</h5>
                   <p>
                           •	Inculcar y fomentar en los ciudadanos el hábito y el placer de la lectura y el aprendizaje.
                           •	Garantizar a todos los ciudadanos el acceso a la información.
                           •	Ofrecer oportunidades para realizar experiencias de creación y utilización de información con el fin de adquirir conocimientos, comprender, desarrollar la imaginación y entretenerse.
                           •	Brindar posibilidades para el desarrollo personal creativo.
                           •	Desarrollar la imaginación y creatividad a través de los recursos que ofrece la biblioteca.
                           •	Profundizar en los hábitos de comportamiento en la biblioteca.
                           •	Aprender a buscar, organizar y aplicar la información disponible.
                   </p>
               </div>
		</div>
	</header>     
    </div>
@endsection
@section('scripts')
<script src="{{ asset('js/cambiardiv.js') }}"></script>
@endsection