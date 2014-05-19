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
            $featuredVideo = Video::getFeaturedItem();
            
            $slug = Input::get('post');
            
            if($slug){
                $videos = Video::getBySlug($slug);
            }
            else{
                $videos = Video::allByDateDesc();
            }
    
            return View::make('video', array(
                'slug' => $slug,
                'videos' => $videos,
                'featuredVideo' => $featuredVideo,
                ));
	}

}
