@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">

			<div class="panel-heading">
				Verify registration
			</div>

			<div class="panel-body">
				
				@if($success)
					Registration Successful
				@else
					Registration Failed
				@endif
				
			</div>

		</div>
	</div>
</div>

@stop