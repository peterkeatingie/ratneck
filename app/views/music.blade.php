@extends('layout')

@section('content')

    <div class="row">   
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body" id="banner-panel">
                    <a href="/"><img class="img-responsive pull-right" src="./images/eyes_short.jpg"></a>
                </div>
            </div>
         </div>   
            
        <div class="col-md-5">
            <!-- Music Panel -->
            <div class="panel panel-default">


                <div class="panel-body">
                    <iframe width="100%" height="230" scrolling="no" frameborder="no" src="{{$featuredMusic->location}}"></iframe>
                </div>
                
               
            </div>
            <!-- Music Panel-->
        </div>
	</div>
	
	<div class="row">

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