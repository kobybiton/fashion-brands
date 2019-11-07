<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRegister extends Request {


	public function authorize(){
	  
		return true;
	}

	public function rules(){
	  
		return [
      'name' => 'required | alpha | min:2',
      'email' => 'required | email',
      'password' => 'required | min:6',      
      'Confirm-Password' => 'required | min:6 | same:password',      
		];
	}

}
