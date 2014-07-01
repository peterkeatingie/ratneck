@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">

			<div class="panel-heading">
				Signup
			</div>

			<div class="panel-body">
				{{ Form::open(array('url' => 'signup/register', 'role' => 'form')) }}
				
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
					{{ Form::label('alias', 'Alias') }}
					{{ Form::text('alias', null, array(
						'class' => 'form-control',
						'placeholder' => 'Enter Alias',
						)) }}
						
					@foreach($errors->get('alias') as $message)
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

				<div class="form-group">
					{{ Form::label('password_confirmation', 'Confirm Password') }}
					{{ Form::password('password_confirmation', array(
						'class' => 'form-control',
						'placeholder' => 'Confirm Password',
						)) }}
						
					@foreach($errors->get('password_confirmation') as $message)
						{{ $message }}
					@endforeach	
				</div>	
				
				<div class="form-group">
				
					{{ Form::submit('Signup') }}
				</div>
				
				{{Form::close()}}
			</div>

		</div>
	</div>
</div>

@stop