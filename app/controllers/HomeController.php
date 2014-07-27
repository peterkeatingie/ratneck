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
			// Header image
            $carouselImage = Carousel::getRandom();
			
            // Get posts
            $featuredPost = Post::getFeaturedItem();
            $posts = Post::getHomePageItems(3);
            
            // Get Music
            $track = Music::getHomePageItems(1)->first();

            // Get Video
            $video = Video::getHomePageItems(1)->first();
            
            // Get random images for home page
			$images = Image::orderByRaw('RAND()')->limit(30)->get();			

            $imagesFolder = Config::get('app.imagesFolder');
            $thumbsFolder = Config::get('app.thumbnailsFolder');
			$carouselFolder = Config::get('app.carouselFolder');
			
			$splashImage = Config::get('app.splashImage');
			$splash = Config::get('app.splash');
            
            return View::make('home', array(
				'splashImage' => $splashImage,
				'splash' => $splash,
				'carouselImage' => $carouselImage,
                'featuredPost' => $featuredPost,
                'posts' => $posts,
                'track' => $track,
                'video' => $video,
                'imagesFolder' => $imagesFolder,
                'thumbsFolder' => $thumbsFolder,
                'images' => $images,
				'carouselFolder' => $carouselFolder,
                ));
	}

}
