@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">

			<div class="panel-heading">
				Signup
				
				{{Form::open(array('url' => '/signup'))}}
				
				{{Form::close()}}
			</div>

			<div class="panel-body">

			</div>

		</div>
	</div>
</div>

@stop