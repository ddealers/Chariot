@extends('layouts.master')
@section('menu')
<a href="./"><img src="{{ asset('/assets/logo_chariot.png') }}"></a>
@parent
@stop
@section('content')
<section class="encabezado-1">
	<div class="info">
		<h1>RENTA DE AUTOS</h1>
		<h4>AUTO DEL MES <span>JETTA</span></h4>
	</div>	
	<div class="imagen">
		<img src=<"{{ asset('/assets/jetta.png') }}">
	</div>
</section>
<section class="cuerpo">
	<ul>
		<li> <a href="#"> <span>AUTOS CLASE A</span> </a><!--<img src="">--></li>
		<li> <a href="#"> <span>AUTOS CLASE B</span> </a><!--<img src="">--></li>
		<li> <a href="#"> <span>AUTOS CLASE C</span> </a><!--<img src="">--></li>
	</ul>
</section>
@stop
@section('redes')
@parent
@stop