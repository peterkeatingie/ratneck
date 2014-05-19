<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function getIndex()
	{
            // Get posts
            $featuredPost = Post::getFeaturedItem();
            $posts = Post::getHomePageItems(3);
            
            // Get Music
            $track = Music::getHomePageItems(1)->first();

            // Get Video
            $video = Video::getHomePageItems(1)->first();
            
            // Get Galleries
            $imageGalleries = ImageGallery::all();
            
            $imagesFolder = Config::get('app.imagesFolder');
            $thumbsFolder = Config::get('app.thumbnailsFolder');
            
            return View::make('home', array(
                'featuredPost' => $featuredPost,
                'posts' => $posts,
                'track' => $track,
                'video' => $video,
                'imagesFolder' => $imagesFolder,
                'thumbsFolder' => $thumbsFolder,
                'imageGalleries' => $imageGalleries,
                ));
	}

}
