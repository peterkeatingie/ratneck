@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">

			<div class="panel-heading">
				Signup
				
				{{ Form::open(array('url' => 'signup/register')) }}
				
				{{ Form::label('email', 'Email Address') }}
				{{ Form::email('email') }}
				
				<br />
				
				{{ Form::label('alias', 'Alias') }}
				{{ Form::text('alias') }}
				
				<br />
				
				{{ Form::label('password', 'Password') }}
				{{ Form::password('password') }}
				
				<br />
				
				{{ Form::label('password_confirmation', 'Confirm Password') }}
				{{ Form::password('password_confirmation') }}
				
				<br />
				
				{{ Form::submit('Signup') }}
				
				{{Form::close()}}
			</div>

			<div class="panel-body">

			</div>

		</div>
	</div>
</div>

@stop