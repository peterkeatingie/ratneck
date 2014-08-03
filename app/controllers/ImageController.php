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
		// Header image
		$carouselImage = Carousel::getRandom();
		
		$imageGalleries = ImageGallery::orderBy('order', 'asc')->get();
		
		$featuredGallery = $imageGalleries->shift();
		
		$halfWay = (int)ceil((count($imageGalleries)) / 2);
		
		$galleriesLeft = $imageGalleries->slice(0, $halfWay);
		$galleriesRight = $imageGalleries->slice($halfWay);
		
		$imagesFolder = Config::get('app.imagesFolder');
		$thumbsFolder = Config::get('app.thumbnailsFolder');
		$carouselFolder = Config::get('app.carouselFolder');
		
		return View::make('images', array(
			'carouselImage' => $carouselImage,
			'carouselFolder' => $carouselFolder,
			'imagesFolder' => $imagesFolder,
			'thumbsFolder' => $thumbsFolder,
			'featuredGallery' => $featuredGallery,
			'galleriesLeft' => $galleriesLeft,
			'galleriesRight' => $galleriesRight,
			'halfWay' => $halfWay,
			));
	}

}
