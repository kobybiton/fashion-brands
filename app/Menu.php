<?php namespace App;

use Session;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

  public function contents(){
      
    return $this->hasMany('App\Content');
  }
  
  public static function SaveMenu($request){
    
    $SaveMenu = false;
     
    $menu = new menu();
    $menu->link = $request['link'];
    $menu->url = General::friendly_url($request['url']);
    $menu->save();
    Session::flash('success', "A new Menu added successfully!");
    $comment = true;
        
    return $SaveMenu;
  }  
  
  public static function updateMenu($id, $request){
    
    $verify_menu = true;
       
    if($menu_exist = Menu::where('link', '=', $request['link'])->first()){
      
      $menu_exist = $menu_exist->toArray();
      
      if($menu_exist['id'] != $id){
        
        $verify_title = false;
        Session::flash('error', 'A Menu with this link already exist..');
      }
    }
    
    if($verify_menu){
            
      $menu = Menu::find($id);
      $menu->link = $request['link'];
      $menu->url = General::friendly_url($request['url']);   
      $menu->save();
      Session::flash('success', 'A new Link has been updated!');
        
      }
    
    return $verify_menu;
  }  
}
