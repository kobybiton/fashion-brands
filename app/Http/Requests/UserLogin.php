<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserLogin extends Request {

	public function authorize(){
	
  	return true;
	}

	public function rules(){
	
  	return [
			'email' => 'required | email',
			'password' => 'required | min:6',
		];
	}

}
