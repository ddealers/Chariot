<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Chariot rent-a-car</title>
		<meta charset="utf-8" />
		<meta name="google-site-verification" content="FupPLi3uVQ-m0D0xTr8X_jycMy0Z06arJLrqQccKXl8" />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:400,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,500' rel='stylesheet' type='text/css'>
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="{{ asset('js/main.js') }}"></script>
	</head>
	<body>
		<div class="centrar">
			@if( Route::getCurrentRoute()->getPath() === '/' )
			<nav class="menu home">
			@else
			<nav class="menu">
			@endif
				@section('menu')
				<ul>
					<li> <a href="{{ action('HomeController@index') }}#servicios">SERVICIOS</a></li>
					<li> <a href="{{ action('HomeController@ofertas') }}">OFERTAS</a></li>
					<li> <a href="{{ action('HomeController@contacto') }}">CONTACTO</a></li>
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