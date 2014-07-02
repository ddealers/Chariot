@extends('layouts.master')
@section('menu')
<a href="./"><img src="{{ asset('/assets/logo_chariot.png') }}"></a>
@parent
@stop
@section('content')
<section class="encabezado-1">
	<div class="info">
		<h1>{{ $title }}</h1>
		<!--<h4>AUTO DEL MES <span>JETTA</span></h4>-->
	</div>	
	<div class="imagen">
		<img src=<"{{ asset('/assets/jetta.png') }}">
	</div>
</section>
<section class="cuerpo">
	@if ($categories)
		<ul>
			@foreach ($categories as $category)
				<li><a href="{{ action('HomeController@categorias') }}/{{ $category->slug }}"> <span>{{ $category->name }}</span> </a><img src="{{ asset($item->img_path) }}"></li>
			@endforeach
		</ul>
	@endif
	@if ($items)
		<ul>
			@foreach ($items as $item)
				<li><a href="{{ action('HomeController@detalle') }}/{{ $item->id }}"> <span>{{ $item->name }}</span> </a><img src="{{ asset($item->img_path) }}"></li>
			@endforeach
		</ul>
	@endif
	@if(!$categories || !$items)
		<p>De momento no hay contenido a mostrar para el criterio seleccionado.</p>
	@endif
</section>
@stop
@section('redes')
@parent
@stop