<?php namespace App\Http\Controllers;

use DB;
use App\General;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsersController extends Controller {

  function __construct(){
    
    //$this->middleware('admin');
  } 
  
  public function index(){
    
    $data['users'] = [];
    
    $sql = "SELECT * FROM users"; 
            
    $data['users'] = DB::select($sql);    
    
    return view('cms.users', $data);
  }
  
    public function show($id){
    
      return view('cms.delete_user', compact('id'));
  }
  
  
  public function destroy($id){
    
    General::generalDeletion($id, false, 'User', 'The user has been deleted successfully!');
    return redirect('cms/users');
  }  

}
