<?php

class RatsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Rats Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'RatsController@showWelcome');
	|
	*/

	public function getIndex()
	{
		$ratsFolder = Config::get('app.ratsFolder');
		
		$filesystem = new Illuminate\Filesystem\Filesystem();
		$files = $filesystem->files($ratsFolder);
		
		return View::make('rats', array(
                'files' => $files,
                ));
	}

}
