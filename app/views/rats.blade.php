@extends('layouts.simple')

@section('content')

<div class="panel panel-default" id="panel-banner">
	<div class="panel-body" id="panel-body-banner">
		@foreach($files as $file)
			<a href="{{$file}}">{{$file}}</a>
		@endforeach
	</div>
</div>


@stop
