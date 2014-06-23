<?php

class MusicController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Music Controller
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
            
			$featuredTrack = Music::getFeaturedItem();
            
            $slug = Input::get('post');
            
            if($slug){
                $tracks = Music::getBySlug($slug);
            }
            else{
                $tracks = Music::allByDateDesc();
            }
			
			$carouselFolder = Config::get('app.carouselFolder');
    
            return View::make('music', array(
				'carouselImage' => $carouselImage,
                'carouselFolder' => $carouselFolder,
                'slug' => $slug,
                'tracks' => $tracks,
                'featuredTrack' => $featuredTrack,
                ));
	}

}
