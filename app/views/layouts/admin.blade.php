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
		<style>
			img{
				width: 30%;
				padding: 20px;
			}
			.form-horizontal .form-group {
				margin-top: 20px;
			}
			.logoChar{
				width: 20%;
			}
			p{
				margin-top: 20px;
				font-size: 16px;
				padding-left: 20px;
				color: #C52026;
				padding: 10px;
				border: #C52026 solid 1px;
				border-radius: 3px;
			}
			ul{
				list-style: none;
			}
			.btn-primary{
				margin-bottom: 217px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				@if(Auth::check())
				<a class="navbar-text navbar-right" href="{{ action('AdminController@logout') }}">Salir</a>
				@endif
				<img src="{{ asset('assets/logo_chariot.png') }}" class="logoChar">
			</nav>
			@yield('content')
		</div>
	</body>
</html>