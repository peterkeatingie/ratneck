<?php

class VideoController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Video Controller
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
			
            $featuredVideo = Video::getFeaturedItem();
            
            $slug = Input::get('post');
            
            if($slug){
                $videos = Video::getBySlug($slug);
            }
            else{
                $videos = Video::allByDateDesc();
            }
			
			$carouselFolder = Config::get('app.carouselFolder');
    
            return View::make('video', array(
				'carouselImage' => $carouselImage,
                'carouselFolder' => $carouselFolder,
                'slug' => $slug,
                'videos' => $videos,
                'featuredVideo' => $featuredVideo,
                ));
	}

}
