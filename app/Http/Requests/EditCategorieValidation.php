<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditCategorieValidation extends Request {

	public function authorize(){
	
  	return true;
	}

	public function rules(){
	  
		return [
			'name' => 'required | min:2',
    	'article' => 'required',   
		];
	}
  
}
