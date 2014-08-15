@extends('layouts.admin')
@section('content')
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
	<li class="active"><a href="#items" role="tab" data-toggle="tab">Items</a></li>
	<li><a href="#categorias" role="tab" data-toggle="tab">Categorías</a></li>
	<li><a href="#ofertas" role="tab" data-toggle="tab">Ofertas</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<div class="tab-pane fade in active" id="items">
		<form method="post" class="form-horizontal" role="form" action="{{ action('AdminController@postItem') }}" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-sm-2 control-label">Nombre</label>
				<div class="col-sm-10">
				<input  name="name" type="text" class="form-control" placeholder="Nombre">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Precio</label>
				<div class="col-sm-10">
					<input name="price" type="text" class="form-control" placeholder="Precio">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Imagen</label>
				<div class="col-sm-10">
					<input name="thumbnail" type="file" class="form-control" placeholder="Thumbnail">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Categoría</label>
				<div class="col-sm-10">
					<select  name="category" class="form-control">
					@foreach($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Especificaciones</label>
				<div class="col-sm-10">
					<textarea  name="especifications" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Servicios</label>
				<div class="col-sm-10">
					<textarea  name="services" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Documentos</label>
				<div class="col-sm-10">
					<textarea  name="docs" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Guardar</button>
				</div>
			</div>
		</form>
	</div>
	<div class="tab-pane fade" id="categorias">
		<form method="post" class="form-horizontal" role="form" action="{{ action('AdminController@postCategory') }}" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-sm-2 control-label">Nombre</label>
				<div class="col-sm-10">
				<input  name="name" type="text" class="form-control" placeholder="Nombre">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Slug</label>
				<div class="col-sm-10">
					<input name="slug" type="text" class="form-control" placeholder="Slug">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Imagen</label>
				<div class="col-sm-10">
					<input name="thumbnail" type="file" class="form-control" placeholder="Thumbnail">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Categoría Padre</label>
				<div class="col-sm-10">
					<select  name="parent" class="form-control">
						<option value="0">Ninguna</option>
					@foreach($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Descripción</label>
				<div class="col-sm-10">
					<textarea  name="description" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Guardar</button>
				</div>
			</div>
		</form>
	</div>
	<div class="tab-pane fade" id="ofertas">
		<ul>
		@foreach($items as $item)
		<li>
			<p>{{ $item->name }}</p>
			<img src="{{ asset($item->img_path) }}" class="carOfertas">
			<a class="btn btn-primary">Añadir a ofertas</a>
		</li>
		@endforeach
		</ul>
	</div>
</div>
@stop