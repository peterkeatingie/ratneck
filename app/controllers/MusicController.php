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
            $allMusic = Music::all();
            $featuredMusic = $allMusic->shift();
    
            return View::make('music', array(
                'allMusic' => $allMusic,
                'featuredMusic' => $featuredMusic,
                ));
	}

}