@extends('layout')

@section('content')

    <div class="row">   
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body" id="banner-panel">
                    <img class="img-responsive pull-right" src="./images/eyes_short.jpg">
                </div>
            </div>
         </div>   
            
        <div class="col-md-5">
            <!-- Music Panel -->
            <div class="panel panel-default">

                
                <div class="panel-heading">
                    <strong>{{$featuredMusic->title}}</strong>

                </div>

                <div class="panel-body">
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" src="{{$featuredMusic->location}}"></iframe>
                </div>
                
               
            </div>
            <!-- Music Panel-->
        </div>

        @foreach($allMusic as $music)
        <div class="col-md-6">
            <div class="panel panel-default">

                
                <div class="panel-heading">
                    <strong>{{$music->title}}</strong>

                </div>

                <div class="panel-body">
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" src="{{$music->location}}"></iframe>
                </div>
                
               
            </div>
        </div>
        @endforeach
    </div>
        
    

@stop