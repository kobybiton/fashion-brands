<?php namespace App\Http\Controllers;

use Session;
use Input;
use App\User;
use App\Http\Requests\UserLogin;
use App\Http\Requests\UserRegister; 
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller {
  
  function __construct(){
    
    //$this->middleware('user', ['except' => 'logout']);
  }

	public function login(){
		
    $destination = Input::get('destination');
  
    return view('form.login', compact('destination'));
	}

	public function register(){
		  
		return view('form.register');
	}

  public function logout(){
      
    Session::flush();
    return redirect('/');
  }

	public function loginUser(UserLogin $request){
		
    $verify = User::validateUser($request['email'], $request['password']);
   
    if(!$verify){
      
      Session::flash('error', 'Wrong email/password , please try again..');
      return redirect('user/login');
      
    } else {
      
      $destination = !empty($request['destination']) ? $request['destination'] : 'shop';
      
      return redirect($destination);      
    }
       
		return $request;
	}

	public function registerUser(UserRegister $request){
		
    if(!User::saveUser($request)){
      
      return redirect('user/register'); 
    
    } else {
      
      return redirect('user/login'); 
    }
      
		return $request;
	}

}
