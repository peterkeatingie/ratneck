@extends('layouts.master')

@section('content')

    <div class="row">   
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
					<div class="row">
						<div class="col-sm-6">
							
							<?php if (isset($posts)) : ?>
							
							@foreach($posts as $post)
								<a class="btn btn-default" href="edit?id={{$post->id}}">{{$post->title}}</a>
							@endforeach
							
							<?php elseif (isset($post)) : ?>
							
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
									
							{{ Form::hidden('id', $post->id, array(
									'class' => 'form-control',
									)) }}
									
							<div class="form-group">
									
							{{ Form::label('title', 'Title') }}
				
								{{ Form::text('title', $post->title, array(
									'class' => 'form-control',
									)) }}
									
							@foreach($errors->get('title') as $message)
								{{ $message }}
							@endforeach	
									
							</div>
									
							<div class="form-group">
									
							{{ Form::label('content', 'Content') }}
				
								{{ Form::textarea('content', $post->content, array(
									'class' => 'form-control',
									)) }}
									
							@foreach($errors->get('content') as $message)
								{{ $message }}
							@endforeach	
							
							</div>
							
							<div class="form-group">
								{{ Form::label('category', 'Choose a category') }}
							
								{{ Form::select('category', array_merge(array(0 => 'None'),$categoryFormOptions), $post->post_category_id, array(
									'class' => 'form-control',
									)) }}
									
								@foreach($errors->get('category') as $message)
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
	
							<label>Current Image</label>
						
							<a class="fancybox thumbnail" href="{{$imagesFolder}}{{$post->getImage()->filename}}" class="thumbnail">

								<img class="mythumb" src="{{$thumbsFolder}}{{$post->getImage()->getThumbnail()->filename}}" alt="Band">

							</a>
							
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
			
							{{ Form::text('description', $post->getImage()->description, array(
								'class' => 'form-control',
								)) }}
								
							@foreach($errors->get('description') as $message)
								{{ $message }}
							@endforeach	
							
							</div>
							
							<div class="checkbox">
								{{ Form::label('homepage', 'Use on home page') }}
							
								{{ Form::checkbox('homepage', 1, $post->home_page ) }}
									
								@foreach($errors->get('homepage') as $message)
									{{ $message }}
								@endforeach	
							</div>
							
							<div class="checkbox">
								{{ Form::label('featured', 'Featured article') }}
							
								{{ Form::checkbox('featured', 1, $post->featured ) }}
									
								@foreach($errors->get('featured') as $message)
									{{ $message }}
								@endforeach	
							</div>
								
		

						</div>
	
					{{Form::close()}}
					
					
					<?php endif; ?>
					
					
					<?php 
						if(Session::get('saveMessage')){
							echo Session::get('saveMessage');
						}
					?>
					
					
					</div>
				</div>
			</div>   
		</div>   
	</div>
	

@stop