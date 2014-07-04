@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">

			<div class="panel-heading">
				<h2><a href="/admin">Admin</a></h2>
			</div>

			<div class="panel-body">
				<h3>Images</h3>
					@foreach($images as $image)
						<a href="?id={{$image->id}}"><button type="button" class="btn btn-danger">{{$image->filename}}</button></a>
					@endforeach
			</div>

		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">

			<div class="panel-heading">
				<h2><a href="/admin">Admin</a></h2>
			</div>
	
	
			<div class="panel-body">
				<h3>Upload new image</h3>
					<div class="form-group">
						{{ Form::open(array(
							'url' => 'admin/images/upload',
							'role' => 'form',
							'files' => true,
							)) }}
		
						{{ Form::file('image', array(
							'class' => 'form-control',
							)) }}
							
						@foreach($errors->get('image') as $message)
							{{ $message }}
						@endforeach	
						
						<?php
							$uploadMessage = Session::get('uploadMessage');
							if($uploadMessage){
								echo $uploadMessage;
							}
						?>
							
					</div>
						
					<div class="form-group">
			
						{{ Form::submit('Upload') }}
				
					</div>
					
					
					{{Form::close()}}
				</div>
				
				

		</div>
	</div>
</div>

@stop