@extends('layouts.master')
@section('content')
<section class="encabezado">
	<div class="info">
		<h1>RENTA DE AUTOS</h1>
		<h4>FICHA TÉCNICA</h4>
	</div>	
	<div class="imagen">
		<img src=<"../assets/jetta.png">
	</div>
</section>
<section class="auto">
	<div>
		<ul>
			<li>NOMBRE:<span>JETTA GLI</span></li>
			<li>PRECIO:<span>$1,000</span></li>
			<li>CATEGORÍA:<span>CLASE A</span></li>	
		</ul>
	</div>
</section>
<section class="icon">
	<a  href="" class="boton">RESERVA AHORA</a>
	<div class="texto">
		<ul class="informes">
			<li> <img src="../assets/compu.png">ESPECIFICACIONES</li>
			<li><img src="../assets/servicio.png">SERVICIOS</li>
			<li><img src="../assets/doc.png">DOCUMENTOS</li>
		</ul>
	</div>
	<div class="contenedor"></div>
</section>
@stop