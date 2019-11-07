<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveCategorieValidation extends Request {

	public function authorize(){
	
  	return true;
	}

	public function rules(){
	  
		return [
			'name' => 'required | min:2',
		  'upload_file' => 'required | image', 
    	'article' => 'required',   
		];
	}
  
}
