@extends('layouts.master')
@section('menu')
<a href="./"><img src="{{ asset('/assets/logo_chariot.png') }}"></a>
@parent
@stop
@section('content')
<section class="encabezado">
	<div class="info">
		<h1>CONTACTO</h1>
		<h4>NOS PUEDE ENCONTRAR...</h4>
	</div>
	<div class="contacto">
		<img src="{{ asset('/assets/contacto.png') }}">
	</div>
</section>
<section class="direccion">
	<p>Av. Oceanía 62 int 1 Col. Romero Rubio C.P. 15400 México D.F. Del. Venustiano Carranza.</p>
	<img src="{{ asset('/assets/mapa.png') }}">
</section>
<section class="icon-contacto">
	<ul>
		<li><div id="borde-blanco"><img src="{{ asset('/assets/whats.png') }}">Whatsapp<span>(0155) 65806950</span></div></li>
		<li><div id="borde-blanco"><a href="https://www.facebook.com/chariotmx?fref=ts"><img src="{{ asset('/assets/facebook.png') }}">Facebook<span>www.facebook.com/chariotmx</span></a></div></li>
		<li><div id="borde-blanco"><img src="{{ asset('/assets/celular.png') }}">Celular<span>(0155) 65806950     ID 42*15*552128</span></div></li>
		<li><div id="borde-blanco"><img src="{{ asset('/assets/mercado-libre.png') }}">Mercado Libre<span>55-3197-4069</span></div></li>
	</ul>
</section>
@stop
@section('redes')
@stop