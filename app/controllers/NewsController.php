<?php

class NewsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default News Controller
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
			
            $featuredPost = Post::getFeaturedItem();
            
            $slug = Input::get('post');
            
            if($slug){
                $posts = Post::getBySlug($slug);
            }
            else{
                $posts = Post::allByDateDesc();
            }
            
            $imagesFolder = Config::get('app.imagesFolder');
            $thumbsFolder = Config::get('app.thumbnailsFolder');
			$carouselFolder = Config::get('app.carouselFolder');
        
            return View::make('news', array(
				'carouselImage' => $carouselImage,
                'carouselFolder' => $carouselFolder,
                'slug' => $slug,
                'posts' => $posts,
                'featuredPost' => $featuredPost,
                'imagesFolder' => $imagesFolder,
                'thumbsFolder' => $thumbsFolder,
                ));
	}

}
