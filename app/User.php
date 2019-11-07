<?php namespace App;

use Hash;
use Session;
use DB;
use Illuminate\Database\Eloquent\Model;

class User extends Model {

	public static function validateUser($email, $password){
  
    $verify = false;
    
    if($user = User::where('email', '=', $email)->first()){
      
      $user = $user->toArray();
      
      if(Hash::check($password, $user['password'])){
        
        $verify = true;
        
        Session::put('user_id', $user['id']);
        Session::put('user_name', $user['name']);
        Session::flash('success', "Welcome {$user['name']} To Fashion Brands Site!");
        
        $role = DB::select('SELECT * FROM roles WHERE user_id = ?', [$user['id']]);
        
        if($role[0]->role_id == 1){
          
          Session::flash('success', 'Welcome Admin Mr.Biton To Your Site, Have A Lovely Day!');
          Session::put('admin', true);
          
        }
      }
    }
    return $verify;  
  } 
  
  public static function saveUser($request){
    
    $register = false;
    
    if(!$user = User::where('email', '=', $request['email'])->first()){
      
      $user = new User();
      $user->name = $request['name'];
      $user->email = $request['email'];
      $user->password = bcrypt($request['password']);
      $user->save();
      DB::insert("INSERT INTO roles VALUES($user->id, 2)");
      Session::flash('success', "Welcome $user->name To Fashion Brands! you can sign in now and Go Shopping!");

      $to = $request['email'];
      $subject = "Welcome $user->name to Fashion Brands";
      $txt = "You are now A member of Fashion Brands site!";
      $headers = "From: Fashion Brands";
      
      mail($to,$subject,$txt,$headers);  
             
      $register = true;    
      
    } else {
      
      Session::flash('error', 'email already exist..');
    }
    
    return $register;
  }
}