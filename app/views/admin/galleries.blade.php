@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">

			<div class="panel-heading">
				<h2><a href="/admin">Admin</a></h2>
			</div>

			<div class="panel-body">
				<h3>Galleries</h3>
					@foreach($galleries as $gallery)
						<a href="?id={{$gallery->id}}"><button type="button" class="btn btn-danger">{{$gallery->name}}</button></a>
					@endforeach
			</div>

		</div>
	</div>
</div>

<div class="row">
	
	@if($selectedGallery)
	
	<div class="col-md-6" id="gallery-details">
	
		<div class="panel panel-default">

			<div class="panel-heading">
				<h3>Gallery Details</h3>
			</div>

			<div class="panel-body">
				<h3>Name: {{$selectedGallery->name}}</h3>
			</div>

		</div>
		
	</div>
	
	<div class="col-md-6" id="gallery-images">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<h3>Gallery Images</h3>
			</div>

			<div class="panel-body">
				@foreach($images as $image)
					<h3>Id: {{$image->image_id}}</h3>
				@endforeach
			</div>

		</div>
		
	</div>
	
	@endif
	
</div>

@stop