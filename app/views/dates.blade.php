@extends('layouts.master')

@section('content')

    <div class="row">   
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body" id="banner-panel">
                    <a href="/"><img class="img-responsive pull-right" src="{{$carouselFolder}}{{$carouselImage->filename}}"></a>
                </div>
            </div>
         </div>   
            
        <div class="col-md-5">
            <!-- Video Panel -->
            <div class="panel panel-default">


                <div class="panel-body">
                    
                </div>
                
               
            </div>
            <!-- Music Panel-->
        </div>
	</div>
	
	<div class="row">

    </div>
        
    

@stop