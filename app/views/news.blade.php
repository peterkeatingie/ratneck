@extends('layouts.master')

@section('content')

    <div class="row" id="row-1">   
        <div class="col-md-6">
            <div class="panel panel-default" id="panel-banner">
                <div class="panel-body" id="panel-body-banner">
                    <a href="/"><img class="img-responsive pull-right" src="{{$carouselFolder}}{{$carouselImage->filename}}"></a>
                </div>
            </div>
         </div>   
            
        <div class="col-md-6 hidden-xs">
            <div class="panel panel-default" id="panel-featured">

                <div class="panel-body">

                    <div class="row">

                        <div class="col-md-4">
							@if($featuredPost->getImage())
                            <a class="fancybox thumbnail" href="{{$imagesFolder}}{{$featuredPost->getImage()->filename}}" class="thumbnail">
                                <img src="{{$thumbsFolder}}{{$featuredPost->getImage()->getThumbnail()->filename}}" alt="Band">
                            </a>
							@endif
                        </div>
                        <div class="col-md-8">
                            {{$featuredPost->content}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	
	<div class="row" id="row-2">

        @if($slug)
            <?php $post = $posts; ?>
            <div class="col-md-8">
                <div class="panel panel-default news-panel">
                    
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>{{$post->getPostCategory()->name}}: {{$post->title}}</strong><br/>
                            </div>

                            <div class="col-md-6 right-align meta-info">
                                <?php
                                    $date = date('jS M Y', strtotime($post->created_at));
                                ?>

                                <i><small>{{$date}}

                                by

                                <?php
                                    $authorName = User::getAliasById($post->created_by);
                                ?>

                                {{$authorName}}</small></i>
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
            
            @foreach($posts as $post)
            <div class="col-md-6">
                <div class="panel panel-default news-panel">


                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="news?post={{$post->slug}}"><strong>{{$post->getPostCategory()->name}}: {{$post->title}}</strong></a><br/>
                            </div>

                            <div class="col-md-6 right-align meta-info">
                                <?php
                                    $date = date('jS M Y', strtotime($post->created_at));
                                ?>

                                <i><small>{{$date}}

                                by

                                <?php
                                    $authorName = User::getAliasById($post->created_by);
                                ?>

                                {{$authorName}}</small></i>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
								@if($post->getImage())
                                <a class="fancybox thumbnail" href="{{$imagesFolder}}{{$post->getImage()->filename}}" class="thumbnail">
                                    <img src="{{$thumbsFolder}}{{$post->getImage()->getThumbnail()->filename}}" alt="Band">
                                </a>
								@endif
                            </div>
                            <div class="col-md-8">
                                {{$post->content}}
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            @endforeach
        
        @endif
    </div>
        
    

@stop