@extends('layout')

@section('content')

    <div class="row">   
        <div class="col-md-7">
            <!-- Banner Panel -->
            <div class="panel panel-default">
                <div class="panel-body" id="banner-panel">
                    <img class="img-responsive pull-right" src="./images/eyes_short.jpg">
                </div>
            </div>
            
            <!-- Banner Panel End -->
            
            <!-- News Panel -->
            <div class="panel panel-default">
                
                @foreach($posts as $post)
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-8">
                            <strong>{{$post->title}}</strong>
                        </div>
                        
                    </div>
                </div>
            
                

                <div class="panel-body">
                    
                    <div class="row">
                                            
                        <div class="col-md-4">
                            <a class="fancybox thumbnail" href="{{$imagesFolder}}{{$post->getImage()->filename}}" class="thumbnail">
                                <img src="{{$thumbsFolder}}{{$post->getImage()->getThumbnail()->filename}}" alt="Band">
                            </a>
                        </div>
                        <div class="col-md-8">
                            {{$post->content}}
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- News Panel -->
            
            <!-- Social Panel -->
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Find Us Here</strong>

                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-2">
                            <a href="https://www.facebook.com/ratneck" target="_blank"><img class="img-responsive social-icon" src="./images/social_icons/facebook_icon_colour_48.png" /></a>
                        </div>
                        <div class="col-xs-2">
                            <a href="https://www.twitter.com/ratneckband" target="_blank"><img class="img-responsive social-icon" src="./images/social_icons/twitter_icon_colour_48.png" /></a>
                        </div>
                        <div class="col-xs-2">
                            <a href="https://www.youtube.com/channel/UCgLO3QnqY36mum6uTqCcZUA" target="_blank"><img class="img-responsive social-icon" src="./images/social_icons/youtube_icon_colour_48.png" /></a>
                        </div>
                        <div class="col-xs-2">
                            <a href="http://ratneck.bandcamp.com/" target="_blank"><img class="img-responsive social-icon" src="./images/social_icons/bandcamp_icon_colour_48.png" /></a>
                        </div>
                        <div class="col-xs-2">
                            <a href="http://www.breakingtunes.com/ratneck" target="_blank"><img class="img-responsive social-icon" src="./images/social_icons/breakingtunes_icon_colour_48.png" /></a>
                        </div>
                        <div class="col-xs-2">
                            <a href="https://soundcloud.com/ratneck" target="_blank"><img class="img-responsive social-icon" src="./images/social_icons/soundcloud_icon_colour_48.png" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Social Panel End -->
        </div>
        
        <div class="col-md-5">

            <!-- Music Panel -->
            <div class="panel panel-default">

                
                <div class="panel-heading">
                    <strong>Listen: {{$firstTrack->title}}</strong>

                </div>

                <div class="panel-body">
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" src="{{$firstTrack->location}}"></iframe>
                </div>
                
               
            </div>
            <!-- Music Panel-->

            
            <!-- Video Panel -->            
            <div class="panel panel-default">

                <div class="panel-heading">
                    <strong>Watch: {{$firstVideo->title}}</strong>
                </div>

                <div class="panel-body">
                    <iframe width="100%" height="315" src="{{$firstVideo->location}}" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <!-- Video Panel -->
            
            <!-- Photos Panel -->
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-8">
                            <strong>Photos</strong>
                        </div>
                        
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                    @foreach($imageGalleries as $imageGallery)
                    
                    
                        <?php $images = $imageGallery->getImages(); ?>
                        
                        @foreach($images as $image)
                        <div class="col-xs-3 col-md-2 remove-padding-left-right">
                            
                            <a class="fancybox thumbnail" href="{{$imagesFolder}}{{$image->filename}}" class="thumbnail">
                            
                                <img class="mythumb" src="{{$thumbsFolder}}{{$image->getThumbnail()->filename}}" alt="Band">
                            
                                </a>
                            
                        </div>
                        @endforeach
                    
                    @endforeach
                    </div>
                </div>

            </div>
            <!-- Photos Panel End -->
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
                
    <div class="row">
        <div class="col-md-7">             
                        
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
        
        
        <div class="col-md-5">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-8">
                            <strong>Join us on Facebook</strong>
                        </div>
                        
                    </div>
                </div>


                <div class="panel-body">
                    <div class="fb-like-box" data-href="http://facebook.com/ratneck" data-width="250" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                </div>

            </div>
            
        </div>
    </div>
        
    </div>


@stop