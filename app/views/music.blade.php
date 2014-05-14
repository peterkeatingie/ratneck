@extends('layout')

@section('content')

    <div class="row" id="row-1">   
        <div class="col-md-6">
            <!-- Banner Panel -->
            <div class="panel panel-default" id="panel-banner">
                <div class="panel-body" id="panel-body-banner">
                    <a href="/"><img class="img-responsive pull-right" src="./images/eyes_short.jpg"></a>
                </div>
            </div>
            <!-- Banner Panel End -->
      
        </div> 
            
        <div class="col-md-6">
            <!-- Music Panel -->
            <div class="panel panel-default" id="panel-featured">


                <div class="panel-body">
                    <iframe width="100%" height="230" scrolling="no" frameborder="no" src="{{$featuredMusic->location}}"></iframe>
                </div>
                
               
            </div>
            <!-- Music Panel-->
        </div>
	</div>
	
	<div class="row" id="row-2">

        @foreach($allMusic as $music)
        <div class="col-md-4">
            <div class="panel panel-default">


                <div class="panel-body">
                    <iframe width="100%" height="250" scrolling="no" frameborder="no" src="{{$music->location}}"></iframe>
                </div>
                
               
            </div>
        </div>
        @endforeach
	</div>

        
    

@stop