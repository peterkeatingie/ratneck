@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">

			<div class="panel-heading">
				Login
			</div>

			<div class="panel-body">
				{{ Form::open(array('url' => 'login/authenticate', 'role' => 'form')) }}
				
				<div class="form-group">
				
					{{ Form::label('email', 'Email Address') }}
					{{ Form::email('email', null, array(
						'class' => 'form-control',
						'placeholder' => 'Enter Email Address',
						)) }}
					
					@foreach($errors->get('email') as $message)
						{{ $message }}
					@endforeach
				
				</div>
				
				<div class="form-group">
					{{ Form::label('password', 'Password') }}
					{{ Form::password('password', array(
						'class' => 'form-control',
						'placeholder' => 'Enter Password',
						)) }}
						
					@foreach($errors->get('password') as $message)
						{{ $message }}
					@endforeach	
				</div>
				
				<?php
					$message = Session::get('message');
					if($message){
						echo $message;
					}
				?>
				

				<div class="form-group">
				
					{{ Form::submit('Signup') }}
				</div>
				
				{{Form::close()}}
			</div>

		</div>
	</div>
</div>

@stop