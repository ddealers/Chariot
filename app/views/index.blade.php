@extends('layouts.master')
@section('content')
<section class="home">
	<img src="../assets/logo_chariot.png">
	<p>Somos una empresa responsable, que brinbda distintos servicios de manera que disfrutarás tu estancia, "Porque nos gusta que visites nuestra ciudad"</p>
	<a href="" class="boton1">RESERVA AHORA</a>
</section>
<section id="servicios" class="servicios"> 
	<h1><span>Servicios</span></h1> 
	<ul class="imagenes">
		<li><a href="./categoria/autos"><img src="../assets/renta_autos1.jpg"><span>Renta de Autos</span></a></li>
		<li><a href="./categoria/autobuses"><img src="../assets/autobuses.jpg"><span>Renta de Autobúses</span></a></li>
		<li><a href="./categoria/tours"><img src="../assets/piramide.jpg"><span>Chariot Tours</span></a></li>
		<li><a href="./categoria/magnicharters"><img src="../assets/magnicharter.jpg"><span>Magnicharters</span></a></li>
	</ul>
</section>
@stop