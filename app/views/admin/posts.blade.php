@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">

			<div class="panel-heading">
				<h3>Manage posts</h3>
				<a href="/post/new"><button type="button" class="btn btn-default">New post</button></a>
			</div>

			<div class="panel-body">
									
					@foreach($posts as $post)
						<div class="col-xs-3 col-md-2 remove-padding-left-right">

							<a class="fancybox thumbnail" href="{{$imagesFolder}}{{$post->getImage()->filename}}" class="thumbnail">

								<img class="mythumb" src="{{$thumbsFolder}}{{$post->getImage()->getThumbnail()->filename}}" alt="Post">

							</a>

						</div>
					@endforeach
			</div>

		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">

	</div>
</div>

@stop