<?php namespace App;

use Session;
use Illuminate\Database\Eloquent\Model;

class General extends Model {

	public static function xss_clean($input){
	  
    $config = \HTMLPurifier_Config::createDefault();
    $purifier = new \HTMLPurifier($config);
    $input = $purifier->purify($input);        
    
    return $input;      
	}
  
  public static function friendly_url($str){
    
    $str = trim($str);
    $str = strtolower($str);
    $str = str_replace(' ', '-', $str);
    
    return $str;
    
  }
  
  public static function generalDeletion($id, $file = true, $model, $flash){
    
    $model = '\\App\\' . $model;
    
    if($file){
      
      if($item = $model::find($id)){
        
        $item = $item->toArray();
        unlink(public_path() . '/admin_img/' . $item['image']);
      }
      
    }
 
    $model::destroy($id);
    Session::flash('success', $flash);
  }  

}
