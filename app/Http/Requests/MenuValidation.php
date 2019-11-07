<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class MenuValidation extends Request {


	public function authorize(){
	  
		return true;
	}

	public function rules(){
	  
		return [
		  'link' => 'required | min:2', 
		  'url' => 'required',
         
		];
	}

}
