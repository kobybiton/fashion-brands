<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveProductValidation extends Request {

	public function authorize(){
	
  	return true;
	}

	public function rules(){
	  
		return [
			'categorie' => 'different:categorie_default',
			'title' => 'required | min:2',
			'price' => 'required | numeric',
		  'upload_file' => 'required | image', 
    	'article' => 'required',   
		];
	}
  
  public function messages(){
    
    return [
      'categorie.different' => 'The categorie selection is required.',
    ];
  }

}
