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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-8">
                            <strong>{{$featuredPost->title}}</strong>
                        </div>
                    </div>
                </div>

                <div class="panel-body">

                    <div class="row">

                        <div class="col-md-4">
                            <a class="fancybox thumbnail" href="{{$imagesFolder}}{{$featuredPost->getImage()->filename}}" class="thumbnail">
                                <img src="{{$thumbsFolder}}{{$featuredPost->getImage()->getThumbnail()->filename}}" alt="Band">
                            </a>
                        </div>
                        <div class="col-md-8">
                            {{$featuredPost->content}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach($posts as $post)
        <div class="col-md-6">
            <div class="panel panel-default">
                
                
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
                

            </div>
        </div>
        @endforeach
    </div>
        
    

@stop