<?php

class AuthController extends BaseController {

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
	public function getSignup()
	{
            
            return View::make('signup', array(

                ));
	}
	
	public function getRegister(){
		$data = Input::all();
		
		$rules = array(
			'email' => 'required|email',
			'alias' => 'required|alpha_num|min:5',
			'password' => 'required|alpha_num|min:8',
			'password_confirmation' => 'required|alpha_num|min:8',
		);
		
		$validator = Validator::make($data, $rules);
		
		if($validator->passes()){
			return "Data saved";
		}
		
		else{
			$errors = $validator->messages();
		}
		
		return Redirect::to('/signup')->withErrors($validator);
	}

}
