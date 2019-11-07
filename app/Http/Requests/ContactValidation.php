<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactValidation extends Request {


	public function authorize(){
	  
		return true;
	}

	public function rules(){
	  
		return [
		  'name' => 'required | alpha | min:2', 
		  'email' => 'required | email',
      'subject' => 'required | min:2',          
      'article' => 'required',          
		];
	}

}
