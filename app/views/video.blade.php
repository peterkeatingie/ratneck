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
            
        <div class="col-md-6 hidden-xs">
            <!-- Video Panel -->
            <div class="panel panel-default" id="panel-featured">


                <div class="panel-body">
                    <iframe width="100%" height="230" scrolling="no" frameborder="no" src="{{$featuredVideo->location}}"></iframe>
                </div>
                
               
            </div>
            <!-- Music Panel-->
        </div>
	</div>
	
	<div class="row" id="row-2">

        @if($slug)
        <?php $video = $videos; ?>
            <div class="col-md-8">
                <div class="panel panel-default">

                    <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-6 no-wrap">
                                        <a href="video?post={{$video->slug}}"><strong>{{$video->title}}</strong></a><br/>
                                    </div>

                                    <div class="col-md-6 right-align meta-info">
                                        <?php
                                            $date = date('jS M Y', strtotime($video->created_on));
                                        ?>

                                        <i><small>{{$date}}

                                        by

                                        <?php
                                            $authorName = User::getAliasById($video->created_by);
                                        ?>

                                        {{$authorName}}</small></i>
                                    </div>
                                </div>
                            </div>

                    <div class="panel-body">
                        <iframe class="video-iframe-single" width="100%" src="{{$video->location}}" frameborder="0" allowfullscreen></iframe>
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
        
        @foreach($videos as $video)
        <div class="col-md-6">
            <div class="panel panel-default">

                <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6 no-wrap">
                                    <a href="video?post={{$video->slug}}"><strong>{{$video->title}}</strong></a><br/>
                                </div>

                                <div class="col-md-6 right-align meta-info">
                                    <?php
                                        $date = date('jS M Y', strtotime($video->created_on));
                                    ?>

                                    <i><small>{{$date}}

                                    by

                                    <?php
                                        $authorName = User::getAliasById($video->created_by);
                                    ?>

                                    {{$authorName}}</small></i>
                                </div>
                            </div>
                        </div>

                <div class="panel-body">
					<iframe width="100%" height="315" src="{{$video->location}}" frameborder="0" allowfullscreen></iframe>
                </div>
                
               
            </div>
        </div>
        @endforeach
        
        @endif
		</div>

        
    

@stop