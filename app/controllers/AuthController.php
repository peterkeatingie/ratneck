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
            
		return View::make('auth.signup', array(

		));
	}
	
	public function getRegister(){
		$data = Input::all();
		
		$rules = array(
			'email' => 'required|email|unique:users',
			'first_name' => 'required|min:2|max:30',
			'second_name' => 'required|min:2|max:30',
			'alias' => 'required|min:5|max:16|unique:users',
			'password' => 'required|alpha_num|min:8|max:30|confirmed',
			'password_confirmation' => 'required|alpha_num|min:8|max:30',
		);
		
		$validator = Validator::make($data, $rules);
		
		if($validator->passes()){
			$user = new User();
			$user->add($data);
			
			return Redirect::to('/login')->with('flash', 'New user created');
		}
		
		else{
			$errors = $validator->messages();
			return Redirect::to('/signup')->withErrors($validator);
		}
	}
	
	public function getLogin(){
		return View::make('auth.login', array(

		));
	}
	
	public function getAuthenticate(){
		$data = Input::all();
		
		$rules = array(
			'email' => 'required|email',
			'password' => 'required|alpha_num|max:30',
		);
		
		$validator = Validator::make($data, $rules);
		
		if($validator->passes()){
			if(Auth::attempt(array(
				'email' => $data['email'],
				'password' => $data['password'],
				'active' => 1,
			))){
				return Redirect::to('/admin')->with('message', 'Login OK');
			}
			else{
				return Redirect::to('/login')->with('message', 'Login failed');
			}
		}
		
		else{
			$errors = $validator->messages();
			return Redirect::to('/login')->withErrors($validator);
		}
	}
	
	public function getVerify(){
		$data = Input::all();
		
		$signupToken = $data['signupToken'];
		
		$user = User::find($data['id']);
		
		if($signupToken == $user->signup_token){
			$success = true;
			$user->verified = 1;
			$user->save();
		}
		else{
			$success = false;
		}
		
		return View::make('auth.verify', array(
				'success' => $success,
			));
	}
}
