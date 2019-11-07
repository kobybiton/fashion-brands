<?php namespace App;

use Request;
use Session;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	public static function saveProduct($request){
	  
    $verify = false;
    
      $fileName = str_random(30) . '.' . Request::file('upload_file')->getClientOriginalExtension();
      Request::file('upload_file')->move(public_path() . '/admin_img/' , $fileName);
      
      $product = new Product();
      $product->categorie_id = $request['categorie'];
      $product->title = $request['title'];
      $product->article = $request['article'];
      $product->price = $request['price'];
      $product->url = General::friendly_url($request['title']);
      $product->image = $fileName;
      $product->save();
      Session::flash('success', 'A brand new product has been aploaded!');
    
    return $verify;  
	}
  
  public static function updateProduct($id, $request){
    
    $verify_title = true;
       
    if($product_exist = Product::where('title', '=', $request['title'])->first()){
      
      $product_exist = $product_exist->toArray();
      
      if($product_exist['id'] != $id){
        
        $verify_title = false;
        Session::flash('error', 'A product with this title already exist..');
      }
    }
    
    if($verify_title){
      
      if(Request::hasFile('upload_file')){
        
        $fileName = str_random(30) . '.' . Request::file('upload_file')->getClientOriginalExtension();
        Request::file('upload_file')->move(public_path() . '/admin_img/' , $fileName);  
        $product = Product::find($id)->toArray();
        unlink(public_path() . '/admin_img/' . $product['image']);    
      }
      $product = Product::find($id);
      $product->categorie_id = $request['categorie'];
      $product->title = $request['title'];
      $product->article = $request['article'];
      $product->price = $request['price'];
      $product->url = General::friendly_url($request['title']);   
      
      if(!empty($fileName)){
        
        $product->image = $fileName;
      } 
      
      $product->save();
      Session::flash('success', 'A brand new Product has been updated!');
        
      }
    
    return $verify_title;
  }
  
}


