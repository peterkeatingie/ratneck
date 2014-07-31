@extends('layouts.master')

@section('content')

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Bootstrap Image Gallery -->

    <div class="row" id="row-1">   
        <div class="col-md-6">
            <div class="panel panel-default" id="panel-banner">
                <div class="panel-body" id="panel-body-banner">
                    <a href="/"><img class="img-responsive pull-right" src="{{$carouselFolder}}{{$carouselImage->filename}}"></a>
                </div>
            </div>
         </div>   
            
        <div class="col-md-6">
            <!-- Video Panel -->
            <div class="panel panel-default" id="panel-featured">
			
			<div class="panel-heading">
                    
			<a href="/gallery?post={{$featuredGallery->slug}}"><strong>{{$featuredGallery->name}}</strong></a><br/>
                    
		</div>

                    <div class="panel-body">
						<div class="row">
						
						<div class="col-md-12">
						@if($featuredGallery)
							<?php $images = $featuredGallery->getImages(); ?>
							
							<div id="gallery{{$featuredGallery->id}}">
								@foreach($images as $image)
								
									<a href="{{$imagesFolder}}{{$image->filename}}" title="{{$image->description}}" data-gallery>
										<img class="mythumb" src="{{$thumbsFolder}}{{$image->getThumbnail()->filename}}" alt="{{$image->description}}">
									</a>
								

								@endforeach
							</div>
						@endif
						</div>
						
						</div>

                </div>
                
               
            </div>
            <!-- Music Panel-->
        </div>
	</div>
	
	<div class="row" id="row-2">

		<div class="col-md-6">
	
		@foreach($galleriesLeft as $imageGallery)
		
			<div class="panel panel-default">

			<div class="panel-heading">
                    
			<a href="/gallery?post={{$imageGallery->slug}}"><strong>{{$imageGallery->name}}</strong></a><br/>
                    
		</div>
			
					<div class="panel-body">
						<div class="row">
						
						<div class="col-md-12">
						
							<?php $images = $imageGallery->getImages(); ?>
				
							<div id="gallery{{$imageGallery->id}}">
								@foreach($images as $image)
								
									<a href="{{$imagesFolder}}{{$image->filename}}" title="{{$image->description}}" data-gallery>
										<img class="mythumb" src="{{$thumbsFolder}}{{$image->getThumbnail()->filename}}" alt="{{$image->description}}">
									</a>
								

								@endforeach
							</div>
						</div>
						
						</div>
					</div>

				</div>
			
		@endforeach
		
		</div>
		
		<div class="col-md-6">
	
		@foreach($galleriesRight as $imageGallery)
		
			<div class="panel panel-default">

			<div class="panel-heading">
                    
			<a href="/photos?post={{$imageGallery->slug}}"><strong>{{$imageGallery->name}}</strong></a><br/>
                    
		</div>
			
					<div class="panel-body">
						<div class="row">
						
						<div class="col-md-12">
						
							<?php $images = $imageGallery->getImages(); ?>
				
							<div id="gallery{{$imageGallery->id}}">
								@foreach($images as $image)
								
									<a href="{{$imagesFolder}}{{$image->filename}}" title="{{$image->description}}" data-gallery>
										<img class="mythumb" src="{{$thumbsFolder}}{{$image->getThumbnail()->filename}}" alt="{{$image->description}}">
									</a>
								

								@endforeach
							</div>
						</div>
						
									
						
						</div>
					</div>

				</div>
			
		@endforeach
		
		</div>

	</div>
     
    

@stop