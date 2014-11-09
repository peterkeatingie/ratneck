@extends('layouts.master')

@section('content')

    <div class="row">   
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    Posts

					<?php if (isset($posts)) : ?>
					
					@foreach($posts as $post)
						<a class="btn btn-default" href="post/edit?id={{$post->id}}">{{$post->title}}</a>
					@endforeach
					
					<?php endif; ?>
					
					<?php if (isset($post)) : ?>
					
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
							'url' => '/post/new/upload',
							'role' => 'form',
							)) }}
							
					<div class="form-group">
							
					{{ Form::label('title', 'Title') }}
		
						{{ Form::text('title', null, array(
							'class' => 'form-control',
							)) }}
							
					</div>
							
					<div class="form-group">
							
					{{ Form::label('content', 'Content') }}
		
						{{ Form::textarea('content', null, array(
							'class' => 'form-control',
							)) }}
							
					</div>
					
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
			
						{{ Form::submit('Upload', array(
							'class' => 'btn btn-default',
							)) }}
				
					</div>

					{{Form::close()}}
					
					<?php endif; ?>
					
                </div>
            </div>
         </div>   
            
       
	</div>
	

@stop