@extends('layouts.master')

@section('content')

    <div class="row">   
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
					<div class="row">
						<div class="col-sm-6">
							
								<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
									<script>tinymce.init({
										selector: 'textarea',
										theme: 'modern',
										plugins: [
													["link"],
																					],
										menubar: false
									});
									</script>

							{{ Form::open(array(
									'url' => '/post/save',
									'role' => 'form',
									'files' => 'true',
									)) }}
									
							<div class="form-group">
									
							{{ Form::label('title', 'Title') }}
				
								{{ Form::text('title', null, array(
									'class' => 'form-control',
									)) }}
									
							@foreach($errors->get('title') as $message)
								{{ $message }}
							@endforeach	
									
							</div>
									
							<div class="form-group">
									
							{{ Form::label('content', 'Content') }}
				
								{{ Form::textarea('content', null, array(
									'class' => 'form-control',
									)) }}
									
							@foreach($errors->get('content') as $message)
								{{ $message }}
							@endforeach	
							
							</div>
							
							<div class="form-group">
					
								{{ Form::submit('Save', array(
									'class' => 'btn btn-default',
									)) }}
						
							</div>

						</div>
					
						<div class="col-sm-6">
							
							<div class="form-group">
						
							{{ Form::label('image', 'Choose an new image') }}
			
							{{ Form::file('image', array(
								'class' => 'form-control',
								)) }}
								
							</div>
							
							<!--
							<div class="form-group">
								<button type="button" class="btn btn-default" id="image-upload">Upload Image</button>
							</div>
							-->
							
							@foreach($errors->get('image') as $message)
								{{ $message }}
							@endforeach	
							
							<div class="form-group">
					
							{{ Form::label('description', 'Image caption') }}
			
							{{ Form::text('description', null, array(
								'class' => 'form-control',
								)) }}
								
							@foreach($errors->get('description') as $message)
								{{ $message }}
							@endforeach	
							
							</div>
							
							<div class="checkbox">
								{{ Form::label('homepage', 'Use on home page') }}
							
								{{ Form::checkbox('homepage', 1, null ) }}
									
								@foreach($errors->get('homepage') as $message)
									{{ $message }}
								@endforeach	
							</div>
							
							<div class="checkbox">
								{{ Form::label('featured', 'Featured article') }}
							
								{{ Form::checkbox('featured', 1, null ) }}
									
								@foreach($errors->get('featured') as $message)
									{{ $message }}
								@endforeach	
							</div>
								
		

						</div>
	
					{{Form::close()}}

					</div>
				</div>
			</div>   
		</div>   
	</div>
	

@stop