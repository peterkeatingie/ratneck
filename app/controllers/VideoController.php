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
            $videos = Video::all();
            $featuredVideo = $videos->shift();
    
            return View::make('video', array(
                'videos' => $videos,
                'featuredVideo' => $featuredVideo,
                ));
	}

}
