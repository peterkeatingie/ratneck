@extends('layouts.master')

@section('content')

@if($splash)
		<a id="splash" class="fancybox" href="{{$splashImage}}">

		</a>
		<script>
			var splash = '<?php echo $splash; ?>';
		</script>
	@endif
	
<!-- Blueimp gallery -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title hidden"></h3>
    <a class="prev hidden-mobile">&lsaquo;</a>
    <a class="next hidden-mobile">&rsaquo;</a>
    <a class="close">&times;</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<!-- END Blueimp gallery -->	

    <div class="row" id="row-1">   
        <div class="col-md-6">
            <!-- Banner Panel -->
            <div class="panel panel-default" id="panel-banner">
                <div class="panel-body" id="panel-body-banner">
                    <a href="/"><img class="img-responsive pull-right" src="{{$carouselFolder}}{{$carouselImage->filename}}"></a>
                </div>
            </div>
            <!-- Banner Panel End -->
      
        </div>
        
        <div class="col-md-6">

            <div class="panel panel-default" id="panel-featured">

                <div class="panel-body">

                    <div class="row">

                        <div class="col-md-4">
							@if($featuredPost->getImage())
                                <img class="thumbnail img-responsive" src="{{$thumbsFolder}}{{$featuredPost->getImage()->getThumbnail()->filename}}" alt="Band">
							@endif
                        </div>
                        
                        <div class="col-md-8">
                            {{$featuredPost->content}}
                        </div>
                        
                    </div>
                </div>
		
            </div>
     
        </div>
    </div>
            
    <div class="row" id="row-2">
	

        <div class="col-md-6 col-md-push-6">
            <div class="row">
			
			<!-- Video -->
                <div class="col-md-12">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <!--<iframe class="video-iframe-home" src="{{$video->location}}" frameborder="0" allowfullscreen></iframe>-->
							
								<!-- The Gallery as inline carousel, can be positioned anywhere on the page -->
								<div id="blueimp-video-carousel" class="video-iframe-home blueimp-gallery blueimp-gallery-controls blueimp-gallery-carousel">
									<div class="slides"></div>
									<h3 class="title"></h3>
									<a class="prev">&lsaquo;</a>
									<a class="next">&rsaquo;</a>
									<a class="play-pause"></a>
								</div>
	
<script>

		blueimp.Gallery([
			@foreach($videos as $video)
			{
				title: '{{$video->title}}',
				href: '{{$video->location}}',
				type: 'text/html',
				youtube: '<?php echo $video->getYoutubeVideoId(); ?>',
				poster: 'https://img.youtube.com/vi/<?php echo $video->getYoutubeVideoId(); ?>/0.jpg'
			},
			@endforeach
      
    ], {
        container: '#blueimp-video-carousel',
        carousel: true
    });

</script>
                        </div>

                        <div class="panel-footer"><h5><a href="video">More Videos</a> <span class="glyphicon glyphicon-chevron-right"></span></h5></div>

                     </div>

                </div>
				<!-- END Video -->
			
                <!-- Music -->
                <div class="col-md-12">

                    <div class="panel panel-default">

                        <div class="panel-body">
                            <iframe class="music-iframe-home" scrolling="no" frameborder="no" src="{{$track->location}}"></iframe>
                        </div>

                        <div class="panel-footer"><h5><a href="/music">More Music</a> <span class="glyphicon glyphicon-chevron-right"></span></h5></div>

                    </div>
                </div>
                
            
            </div>
            <div class="row">
                <!-- Photos Panel -->
                <div class="col-md-12">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="row">
							
							<div class="col-md-12">

							<div id="home-gallery">
								@foreach($images as $image)
								
									<a href="{{$imagesFolder}}{{$image->filename}}" title="{{$image->description}}">
										<img class="mythumb" src="{{$thumbsFolder}}{{$image->getThumbnail()->filename}}" alt="{{$image->description}}">
									</a>
								

								@endforeach
								
								<script>
									document.getElementById('home-gallery').onclick = function (event) {
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
						
						<div class="panel-footer"><h5><a href="/gallery">More Photos</a> <span class="glyphicon glyphicon-chevron-right"></span></h5></div>

                    </div>
                </div>
            </div>
        </div>
		
		
		<div class="col-md-6 col-md-pull-6">
				
            <!-- News -->
            
            @foreach($posts as $post)
					
            <div class="panel panel-default">
							
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="/news?post={{$post->slug}}"><strong>{{$post->getPostCategory()->name}}: {{$post->title}}</strong></a><br/>
                        </div>
                        
                        <div class="col-md-6 right-align meta-info">
                            <?php
                                $date = date('jS M Y', strtotime($post->created_at));
                            ?>
                            
                            <i><small>{{$date}}
                            
                            by
                            
                            <?php
                                $authorName = User::getAliasById($post->created_by);
                            ?>
                            
                            {{$authorName}}</small></i>
                        </div>
                    </div>
                </div>

                <div class="panel-body">

                        <div class="row">

                                <div class="col-md-4">
										@if($post->getImage())
											<img class="thumbnail img-responsive" src="{{$thumbsFolder}}{{$post->getImage()->getThumbnail()->filename}}" alt="Band">
										@endif
                                </div>
                                <div class="col-md-8">
                                        {{$post->content}}
                                </div>
                        </div>
                </div>

                <div class="panel-footer"><h5><a href="/news">More News</a> <span class="glyphicon glyphicon-chevron-right"></span></h5></div>
					
					
            </div>

            @endforeach

				
        </div>
		
    </div>
                
    <div class="row" id="row-3">
        <div class="col-md-6">             
                        
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-8">
                            <strong>Follow us on Twitter</strong>
                        </div>
                        
                    </div>
                </div>


                <div class="panel-body">
                  <a class="twitter-timeline" href="https://twitter.com/ratneckband" data-widget-id="459085992327000064">Tweets by @ratneckband</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



                </div>

            </div>
            
                        
            
        </div>
        
        
        <div class="col-md-6">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-8">
                            <strong>Join us on Facebook</strong>
                        </div>
                        
                    </div>
                </div>


                <div class="panel-body panel-body-fb">
                    <div class="fb-like-box" data-href="http://facebook.com/ratneck" data-width="250" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                </div>

            </div>
            
        </div>
    </div>



            <!-- Dates Panel -->
            <!--
            <div class="panel panel-default" id="dates-panel">

                <div class="panel-heading">
                    <h4><strong>Dates</strong></h4>
                        
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>The Hut, Phibsboro<br /><small>03/05/14</small></h3>
                            <h4 class="hidden-xs">Fibber Magees, Dublin 1<br /><small>23/04/14</small></h4>
                            <h4 class="hidden-xs">The Natural Cut, Dublin 2<br /><small>20/04/14</small></h4>
                            <h4 class="hidden-xs">Fibber Magees, Dublin 1<br /><small>17/04/14</small></h4>
                            
                        </div>
                    </div>
                    
                </div>

            </div>
            -->
            <!-- Dates Panel End -->

@stop