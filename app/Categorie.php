<?php namespace App;

use PDO;
use Request;
use Session;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model {

	public function products(){
	  
    return $this->hasMany('App\Product');
	}
  
  public static function saveCategories($request){
    
    $verify = false;
    
    $fileName = str_random(30) . '.' . Request::file('upload_file')->getClientOriginalExtension();
    Request::file('upload_file')->move(public_path() . '/admin_img/' , $fileName);
    
    $categorie = new categorie();
    $categorie->name = $request['name'];
    $categorie->article = $request['article'];
    $categorie->url = General::friendly_url($request['name']);
    $categorie->image = $fileName;
    $categorie->save();
    Session::flash('success', 'A brand new categorie has been aploaded!');
    
    return $verify;  
  }  

  public static function updateCategorie($id, $request){
    
    $verify_title = true;
       
    if($categorie_exist = Categorie::where('name', '=', $request['name'])->first()){
      
      $categorie_exist = $categorie_exist->toArray();
      
      if($categorie_exist['id'] != $id){
        
        $verify_title = false;
        Session::flash('error', 'A product with this title already exist..');
      }
    }
    
    if($verify_title){
      
      if(Request::hasFile('upload_file')){
        
        $fileName = str_random(30) . '.' . Request::file('upload_file')->getClientOriginalExtension();
        Request::file('upload_file')->move(public_path() . '/admin_img/' , $fileName);  
        $categorie = Categorie::find($id)->toArray();
        unlink(public_path() . '/admin_img/' . $categorie['image']);    
      }
      
      $categorie = Categorie::find($id);
      $categorie->name = $request['name'];
      $categorie->article = $request['article'];
      $categorie->url = General::friendly_url($request['title']);   
      
      if(!empty($fileName)){
        
        $categorie->image = $fileName;
      } 
      
      $categorie->save();
      Session::flash('success', 'A brand new Categorie has been updated!');
        
      }
    
    return $verify_title;
  }

}
