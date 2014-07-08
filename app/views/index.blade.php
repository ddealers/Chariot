@extends('layouts.master')
@section('content')
<section class="home">
	<img src="{{ asset('assets/logo_chariot.png') }}">
	<p>Somos una empresa responsable, que brinda distintos servicios de manera que disfrutarás tu estancia, "Porque nos gusta que visites nuestra ciudad"</p>
	<a href="{{ action('HomeController@contacto') }}" class="boton1">RESERVA AHORA</a>
</section>
<section id="servicios" class="servicios"> 
	<h1><span>Servicios</span></h1> 
	<ul class="imagenes">
		<li><a href="{{ action('HomeController@categorias',['autos']) }}"><img src="{{ asset('/assets/renta_autos1.jpg') }}" class="servicio"><span>Renta de Autos</span></a></li>
		<li><a href="{{ action('HomeController@categorias',['autobuses']) }}"><img src="{{ asset('/assets/autobuses.jpg') }}" class="servicio"><span>Renta de Autobúses</span></a></li>
		<li><a href="{{ action('HomeController@categorias',['tours']) }}"><img src="{{ asset('/assets/piramide.jpg') }}" class="servicio"><span>Chariot Tours</span></a></li>
		<li><a href="{{ action('HomeController@categorias',['magnicharters']) }}"><img src="{{ asset('/assets/magnicharter.jpg') }}" class="servicio"><span>Magnicharters</span></a></li>
	</ul>
</section>
@stop