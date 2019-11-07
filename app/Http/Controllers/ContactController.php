<?php namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests;
use App\Http\Requests\ContactValidation;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactController extends Controller {
   
  public function contacts(){
    
    $data = [];
    $data['title'] = 'Contact Us';
    return view('form.contact_us', $data);
  }      		

  public function SaveComment(ContactValidation $request){
    
    if(Contact::SaveComment($request)){
      
      return redirect('shop'); 
    
    }   
    return $request;
  }
}
