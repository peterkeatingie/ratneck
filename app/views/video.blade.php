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
                    <iframe width="100%" height="230" scrolling="no" frameborder="no" src="{{$featuredVideo->location}}"></iframe>
                </div>
                
               
            </div>
            <!-- Music Panel-->
        </div>
	</div>
	
	<div class="row" id="row-2">

        @foreach($videos as $video)
        <div class="col-md-6">
            <div class="panel panel-default">


                <div class="panel-body">
					<iframe width="100%" height="315" src="{{$video->location}}" frameborder="0" allowfullscreen></iframe>
                </div>
                
               
            </div>
        </div>
        @endforeach
		</div>

        
    

@stop