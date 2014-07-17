@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">

			<div class="panel-heading">
				<h3>Manage images</h3>
			</div>

			<div class="panel-body">
				
					@foreach($images as $image)
						<div class="col-xs-3 col-md-2 remove-padding-left-right">

							<a class="fancybox thumbnail" href="{{$imagesFolder}}{{$image->filename}}" class="thumbnail">

								<img class="mythumb" src="{{$thumbsFolder}}{{$image->getThumbnail()->filename}}" alt="Band">

							</a>

						</div>
					@endforeach
			</div>

		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">

			<div class="panel-heading">
				<h2><a href="/admin">Upload new image</a></h2>
			</div>
	
	
			<div class="panel-body">
					
					{{ Form::open(array(
							'url' => 'admin/images/upload',
							'role' => 'form',
							'files' => true,
							)) }}
					
					<div class="form-group">
					
						{{ Form::label('image', 'Choose an image') }}
		
						{{ Form::file('image', array(
							'class' => 'form-control',
							)) }}
							
						@foreach($errors->get('image') as $message)
							{{ $message }}
						@endforeach	
							
					</div>
					
					<div class="form-group">
					
						{{ Form::label('description', 'Enter a description') }}
		
						{{ Form::text('description', null, array(
							'class' => 'form-control',
							)) }}
							
						@foreach($errors->get('description') as $message)
							{{ $message }}
						@endforeach	
							
					</div>
					
					<div class="form-group">
						{{ Form::label('gallery', 'Choose a gallery') }}
					
						{{ Form::select('gallery', array_merge(array(0 => 'None'),$galleryFormOptions), null, array(
							'class' => 'form-control',
							)) }}
							
						@foreach($errors->get('gallery') as $message)
							{{ $message }}
						@endforeach	
					</div>
					
					<div class="checkbox">
						{{ Form::label('banner', 'Use as banner image') }}
					
						{{ Form::checkbox('banner', 1, false ) }}
							
						@foreach($errors->get('banner') as $message)
							{{ $message }}
						@endforeach	
					</div>
					
					<?php
						$uploadMessage = Session::get('uploadMessage');
						if($uploadMessage){
							echo $uploadMessage;
						}
					?>
						
					<div class="form-group">
			
						{{ Form::submit('Upload', array(
							'class' => 'btn btn-default',
							)) }}
				
					</div>
					
					
					{{Form::close()}}
				</div>
				
				

		</div>
	</div>
</div>

@stop