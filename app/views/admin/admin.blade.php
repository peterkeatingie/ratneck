@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">

			<div class="panel-heading">
				<h2>Admin</h2>
			</div>

			<div class="panel-body">
			<?php
					$message = Session::get('message');
					if($message){
						// echo $message;
					}
				?>
				
				<a href="admin/gallery"><button type="button" class="btn btn-default">Galleries</button></a>
				
			</div>

		</div>
	</div>
</div>

@stop