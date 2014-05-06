<?php

class ImageController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Image Controller
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
		$imageGalleries = ImageGallery::all();
		
		$featuredGallery = $imageGalleries->shift();
		
		$imagesFolder = Config::get('app.imagesFolder');
		$thumbsFolder = Config::get('app.thumbnailsFolder');
		
		return View::make('images', array(
			'imagesFolder' => $imagesFolder,
			'thumbsFolder' => $thumbsFolder,
			'imageGalleries' => $imageGalleries,
			'featuredGallery' => $featuredGallery,
			));
	}

}