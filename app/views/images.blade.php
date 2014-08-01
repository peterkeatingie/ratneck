@extends('layouts.master')

@section('content')

<!-- Blueimp gallery -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">-</a>
    <a class="next">-</a>
    <a class="close">x</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<!-- END Blueimp gallery -->	

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
							
							<div id="gallery-{{$featuredGallery->id}}">
								@foreach($images as $image)
								
									<a href="{{$imagesFolder}}{{$image->filename}}" title="{{$image->description}}">
										<img class="mythumb" src="{{$thumbsFolder}}{{$image->getThumbnail()->filename}}" alt="{{$image->description}}">
									</a>
								

								@endforeach
								
								<script>
									var galleryId = "gallery-" + "{{$featuredGallery->id}}";
									document.getElementById(galleryId).onclick = function (event) {
										event = event || window.event;
										var target = event.target || event.srcElement,
											link = target.src ? target.parentNode : target,
											options = {index: link, event: event},
											links = this.getElementsByTagName('a');
										blueimp.Gallery(links, options);
									};
								</script>
								
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
				
							<div id="gallery-{{$imageGallery->id}}">
								@foreach($images as $image)
								
									<a href="{{$imagesFolder}}{{$image->filename}}" title="{{$image->description}}">
										<img class="mythumb" src="{{$thumbsFolder}}{{$image->getThumbnail()->filename}}" alt="{{$image->description}}">
									</a>
								

								@endforeach
								
							</div>
							
							<script>
									var galleryId = "gallery-" + "{{$imageGallery->id}}";
									console.log(galleryId);
									document.getElementById(galleryId).onclick = function (event) {
										event = event || window.event;
										var target = event.target || event.srcElement,
											link = target.src ? target.parentNode : target,
											options = {index: link, event: event},
											links = this.getElementsByTagName('a');
										blueimp.Gallery(links, options);
									};
								</script>
							
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
				
							<div id="gallery-{{$imageGallery->id}}">
								@foreach($images as $image)
								
									<a href="{{$imagesFolder}}{{$image->filename}}" title="{{$image->description}}">
										<img class="mythumb" src="{{$thumbsFolder}}{{$image->getThumbnail()->filename}}" alt="{{$image->description}}">
									</a>
								

								@endforeach
								
								<script>
									var galleryId = "gallery-" + "{{$imageGallery->id}}";
									document.getElementById(galleryId).onclick = function (event) {
										event = event || window.event;
										var target = event.target || event.srcElement,
											link = target.src ? target.parentNode : target,
											options = {index: link, event: event},
											links = this.getElementsByTagName('a');
										blueimp.Gallery(links, options);
									};
								</script>
							</div>
						</div>
						
									
						
						</div>
					</div>

				</div>
			
		@endforeach
		
		</div>

	</div>
     
    

@stop