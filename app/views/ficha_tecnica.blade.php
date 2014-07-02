@extends('layouts.master')
@section('menu')
<a href="{{ action('HomeController@index') }}"><img src="{{ asset('assets/logo_chariot.png') }}"></a>
@parent
@stop
@section('content')
<section class="encabezado">
	<div class="info">
		<h1>RENTA DE AUTOS</h1>
		<h4>FICHA TÉCNICA</h4>
	</div>	
	<div class="imagen">
		<img src=<"{{$item->img_path}}">
	</div>
</section>
<section class="auto">
	<div>
		<ul>
			<li>NOMBRE:<span>{{ $item->name }}</span></li>
			<li>PRECIO:<span>{{ $item->price }}</span></li>
			<li>CATEGORÍA:<span>{{ $item->cat_id }}</span></li>	
		</ul>
	</div>
</section>
<section class="icon">
	<a  href="{{ action('HomeController@contacto') }}" class="boton">RESERVA AHORA</a>
	<div class="texto">
		<ul class="informes">
			<li> <img src="{{ asset('assets/compu.png') }}">ESPECIFICACIONES</li>
			<li><img src="{{ asset('assets/servicio.png') }}">SERVICIOS</li>
			<li><img src="{{ asset('assets/doc.png') }}">DOCUMENTOS</li>
		</ul>
	</div>
	<div class="contenedor">
		<article>{{ $item->especifications }}</article>
		<article>{{ $item->services }}</article>
		<article>{{ $item->documents }}</article>
	</div>
</section>
@stop