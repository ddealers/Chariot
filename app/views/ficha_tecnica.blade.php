@extends('layouts.master')
@section('menu')
<a href="{{ action('HomeController@index') }}"><img src="{{ asset('assets/logo_chariot.png') }}" class="logoChariot"></a>
@parent
@stop
@section('content')
<section class="encabezado">
	<div class="info">
		<h1>{{ $title }}</h1>
		<h4>FICHA TÉCNICA</h4>
	</div>	
	<div class="imagen" style="background-image:url({{ asset($img) }}); background-size: cover">
		<!--img src=<"{{ asset($item->img_path) }}"-->
	</div>
</section>
<section class="auto" style="background-image:url({{ asset($item->img_path) }}); background-size: cover">
	<div>
		<ul>
			<li>NOMBRE:<span>{{ $item->name }}</span></li>
			<li>PRECIO:<span>{{ $item->price }}</span></li>
			<li>CATEGORÍA:<span>{{ $cat_name }}</span></li>	
		</ul>
	</div>
</section>
<section class="icon">
	<a  href="{{ action('HomeController@contacto') }}" class="boton">RESERVA AHORA</a>
	<div class="texto">
		<ul class="informes">
			<li><img src="{{ asset('assets/compu.png') }}">ESPECIFICACIONES</li>
			<li><img src="{{ asset('assets/servicio.png') }}">SERVICIOS</li>
			<li><img src="{{ asset('assets/doc.png') }}">DOCUMENTOS</li>
		</ul>
		<div class="contenedor">
			<article class="contenido">{{ $item->especifications }}</article>
			<article class="contenido">{{ $item->services }}</article>
			<article class="contenido">{{ $item->documents }}</article>
		</div>
	</div>
	<div class="contenedor"></div>
</section>
@stop
@section('redes')
@parent
@stop