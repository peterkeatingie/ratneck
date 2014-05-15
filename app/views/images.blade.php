@extends('layouts.master')

@section('content')

    <div class="row" id="row-1">   
        <div class="col-md-6">
            <div class="panel panel-default" id="panel-banner">
                <div class="panel-body" id="panel-body-banner">
                    <a href="/"><img class="img-responsive pull-right" src="./images/eyes_short.jpg"></a>
                </div>
            </div>
         </div>   
            
        <div class="col-md-6">
            <!-- Video Panel -->
            <div class="panel panel-default" id="panel-featured">

                    <div class="panel-body">
						<div class="row">
						
						
						
							<?php $images = $featuredGallery->getImages(); ?>
							
							@foreach($images as $image)
							<div class="col-xs-3 col-md-2 remove-padding-left-right">
								
								<a class="fancybox thumbnail" href="{{$imagesFolder}}{{$image->filename}}" class="thumbnail">
								
									<img class="mythumb" src="{{$thumbsFolder}}{{$image->getThumbnail()->filename}}" alt="Band">
								
									</a>
								
							</div>
							@endforeach
						
						
						</div>

                </div>
                
               
            </div>
            <!-- Music Panel-->
        </div>
	</div>
	
	<div class="row" id="row-2">

		@foreach($imageGalleries as $imageGallery)
	
		<div class="col-md-6">
			<div class="panel panel-default">

					<div class="panel-body">
						<div class="row">
						
						
						
							<?php $images = $imageGallery->getImages(); ?>
							
							@foreach($images as $image)
							<div class="col-xs-3 col-md-2 remove-padding-left-right">
								
								<a class="fancybox thumbnail" href="{{$imagesFolder}}{{$image->filename}}" class="thumbnail">
								
									<img class="mythumb" src="{{$thumbsFolder}}{{$image->getThumbnail()->filename}}" alt="Band">
								
									</a>
								
							</div>
							@endforeach
						
						
						</div>
					</div>

				</div>
		</div>
		
		@endforeach
	</div>
     
    

@stop