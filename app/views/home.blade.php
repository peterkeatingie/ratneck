@extends('layout')

@section('content')

<div class="container">
		
    <div class="row">

        <div class="col-md-12">
            <nav class="navbar navbar-default" id="top-navbar" role="navigation">
                <div class="container-fluid">
                    
                    <div class="col-md-6">
                        
                    </div>
                    
                    <div class="col-md-6 pull-right collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                    <li><a href="#"><strong>News</strong></a></li>
                                    <li><a href="#"><strong>Music</strong></a></li>
                                    <li><a href="#"><strong>Video</strong></a></li>
                                    <li><a href="#"><strong>Dates</strong></a></li>
                                    <li><a href="#"><strong>Band</strong></a></li>
                            </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-default" id="dates-panel">

                <div class="panel-heading">
                    <h4><strong>Dates</strong></h4>
                        
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>The Hut, Phibsboro<br /><small>03/05/14</small></h3>
                            <h4>Fibber Magees, Dublin 1<br /><small>23/04/14</small></h4>
                            <h4>The Natural Cut, Dublin 2<br /><small>20/04/14</small></h4>
                            <h4>Fibber Magees, Dublin 1<br /><small>17/04/14</small></h4>
                            
                        </div>
                        
                    </div>
                </div>

            </div>

        </div>

        <div class="col-md-7">
            <div class="panel panel-default" id="banner-panel">
                <div class="panel-body" id="banner">
                    <img class="img-responsive pull-right" src="./images/eyes_short.jpg">
                </div>
            </div>
        </div>

    </div>

    <div class="row" id="second-row">
        

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
                    <strong>Watch: No Way Back</strong>
                </div>

                <div class="panel-body">
                    <iframe width="100%" height="315" src="//www.youtube.com/embed/KJNCp601wnM" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <!-- Video Panel -->
            
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-8">
                            <strong>Join us on Facebook</strong>
                        </div>
                        
                    </div>
                </div>


                <div class="panel-body">
                    <div class="fb-facepile" data-app-id="586572544731660" data-href="https://www.facebook.com/ratneck" data-max-rows="6" data-colorscheme="light" data-size="large" data-show-count="true"></div>
                </div>

            </div>
            
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

        <div class="col-md-7">
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
                        <div class="col-md-2">
                            <a href="#" class="thumbnail">
                                <img src="../images/camelot_olly.jpg" alt="Band">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="thumbnail">
                                <img src="../images/troubador_peter_vinny.jpg" alt="Band">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="thumbnail">
                                <img src="../images/natural_cut_gig_1.jpg" alt="Band">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="thumbnail">
                                <img src="../images/fibbers_gig_1.jpg" alt="Band">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="thumbnail">
                                <img src="../images/natural_cut_band.jpg" alt="Band">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="thumbnail">
                                <img src="../images/westland_olly.jpg" alt="Band">
                            </a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2">
                            <a href="#" class="thumbnail">
                                <img src="../images/camelot_olly.jpg" alt="Band">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="thumbnail">
                                <img src="../images/troubador_peter_vinny.jpg" alt="Band">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="thumbnail">
                                <img src="../images/natural_cut_gig_1.jpg" alt="Band">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="thumbnail">
                                <img src="../images/fibbers_gig_1.jpg" alt="Band">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="thumbnail">
                                <img src="../images/natural_cut_band.jpg" alt="Band">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="thumbnail">
                                <img src="../images/westland_olly.jpg" alt="Band">
                            </a>
                        </div>
                    </div>
                    
                    
                </div>

                <div class="panel-footer">
                    Footer
                </div>
            </div>
            
            
            
        </div>
       
    </div>

    
    
</div><!-- Container -->

@stop