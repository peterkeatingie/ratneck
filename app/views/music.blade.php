@extends('layouts.master')

@section('content')

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
            

        <div class="col-md-6 hidden-xs">
        
            <!-- Music Panel -->
            <div class="panel panel-default" id="panel-featured">


                <div class="panel-body">
                    <iframe width="100%" height="230" scrolling="no" frameborder="no" src="{{$featuredTrack->location}}"></iframe>
                </div>
                
               
            </div>
            <!-- Music Panel-->
        </div>
	</div>
	
	<div class="row" id="row-2">

        @if($slug)
            <?php $track = $tracks; ?>
            <div class="col-md-8">
                <div class="panel panel-default">

                    <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6 no-wrap">
                                    <a href="music?post={{$track->slug}}"><strong>{{$track->title}}</strong></a><br/>
                                </div>

                                <div class="col-md-6 right-align meta-info">
                                    <?php
                                        $date = date('jS M Y', strtotime($track->created_at));
                                    ?>

                                    <i><small>{{$date}}

                                    by

                                    <?php
                                        $authorName = User::getAliasById($track->created_by);
                                    ?>

                                    {{$authorName}}</small></i>
                                </div>
                            </div>
                        </div>

                    <div class="panel-body">
                        <iframe class="music-iframe-single" scrolling="no" frameborder="no" src="{{$track->location}}"></iframe>
                    </div>


                </div>
            </div>
        
        <div class="col-md-4">
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
        @else
        
            @foreach($tracks as $track)
            <div class="col-md-4">
                <div class="panel panel-default">

                    <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6 no-wrap">
                                    <a href="music?post={{$track->slug}}"><strong>{{$track->title}}</strong></a><br/>
                                </div>

                                <div class="col-md-6 right-align meta-info">
                                    <?php
                                        $date = date('jS M Y', strtotime($track->created_at));
                                    ?>

                                    <i><small>{{$date}}

                                    by

                                    <?php
                                        $authorName = User::getAliasById($track->created_by);
                                    ?>

                                    {{$authorName}}</small></i>
                                </div>
                            </div>
                        </div>

                    <div class="panel-body">
                        <iframe class="music-iframe" scrolling="no" frameborder="no" src="{{$track->location}}"></iframe>
                    </div>


                </div>
            </div>
            @endforeach
        @endif
	</div>

        
    

@stop