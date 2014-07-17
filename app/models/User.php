<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}
        
	public static function getAliasById($id){
		return self::find($id)->alias;
	}
	
	public function sendWelcomeEmail(){
		$user = $this;
		
		$data = array(
			'id' => $user->id,
			'alias' => $user->alias,
			'signupToken' => $user->signup_token,
		);
		
		Mail::send('emails.auth.signup', $data, function($message) use($user){
			$message->to($user->email, $user->alias)
				->subject('Welcome to ratneck.com');
		});
	}
	
	public function add($data){
		$this->email = $data['email'];
		$this->first_name = $data['first_name'];
		$this->second_name = $data['second_name'];
		$this->alias = $data['alias'];
		$this->password = Hash::make($data['password']);
		$this->role_id = 1;
		
		$token = md5(uniqid(mt_rand(), true));
		
		$this->signup_token = $token;
		
		if($this->save()){
			$this->sendWelcomeEmail();
			return $this->id;
		}
		else{
			return false;
		}
	}
}
