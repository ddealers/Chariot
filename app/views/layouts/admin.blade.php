<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Chariot rent-a-car</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:400,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,500' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				@if(Auth::check())
				<a class="navbar-text navbar-right" href="{{ action('AdminController@logout') }}">Salir</a>
				@endif
				<img src="{{ asset('assets/logo_chariot.png') }}">
			</nav>
			@yield('content')
		</div>
	</body>
</html>