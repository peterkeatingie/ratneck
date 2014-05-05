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
            
        </div>
        
        <div class="col-md-5">
            
            
        </div>
    </row>

    

@stop