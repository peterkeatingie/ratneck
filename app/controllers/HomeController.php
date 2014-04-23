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
            $allMusic = Music::all();
            
            $firstTrack = Music::find(1);
            
            $posts = Post::all();
            
            $imagesFolder = Config::get('app.imagesFolder');
            $thumbsFolder = Config::get('app.thumbnailsFolder');
            
            //echo $imageFolder;
            
            return View::make('home', array(
                'allMusic' => $allMusic,
                'firstTrack' => $firstTrack,
                'posts' => $posts,
                'imagesFolder' => $imagesFolder,
                'thumbsFolder' => $thumbsFolder,
                ));
	}

}
