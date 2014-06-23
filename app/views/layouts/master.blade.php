<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Chariot rent-a-car</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:400,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,500' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="centrar">
			
			<nav class="menu home">
				@section('menu')
				<ul>
					<li> <a href="./#servicios">SERVICIOS</a></li>
					<li> <a href="./ofertas">OFERTAS</a></li>
					<li> <a href="./contacto">CONTACTO</a></li>
				</ul>
				@show
			</nav>
			@yield('content')
			<footer>
			@section('redes')
    			<span>
		    		<ul>
		    			<li> <a href="https://www.facebook.com/chariotmx">chariotmx rent-a-car</a></li>
		    			<li> <a href="https://www.twitter.com/@Chariotmx">@Chariotmx rent-a-car</a></li>
		    			</ul>
            	</span>
            	<cite><div>CUENTANOS TU EXPERENCIA A TRAVÉS DE LAS REDES SOCIALES.</div></cite>
            @show
            	<div><p>Chariot rent-a-car / Todos los derechos reservados 2014 / Políticas de privacidad.</p></div>
            </footer>
			</div>
	</body>
</html>