<?php namespace App\Http\Controllers;

use DB;
use App\General;
use App\Contact;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactsController extends Controller {

  function __construct(){
    
    $this->middleware('admin');
  }	
  
  public function index(){
    
    $data['contacts'] = [];
    
    $sql = "SELECT * FROM contacts"; 
            
    $data['contacts'] = DB::select($sql);    
    
    return view('cms.contacts', $data);
  }
  
  	public function show($id){
		
      return view('cms.delete_contact', compact('id'));
	}
  
  
  public function destroy($id){
	  
    General::generalDeletion($id, false, 'Contact', 'The contact has been deleted successfully!');
    return redirect('cms/contacts');
  }  

}
