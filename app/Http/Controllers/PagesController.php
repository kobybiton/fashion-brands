<?php namespace App\Http\Controllers;

use App\Menu;
use App\Content;
use App\General;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {
  
  public function boot($page){
    
    $data['contents'] = [];
    
    if($page = General::xss_clean($page)){
        
      if($menu = Menu::where('url', '=', $page)->first()){
        
        if($contents = Menu::find($menu['id'])->contents){
          
          $data['title'] = $menu['link'];
          $data['contents'] = $contents->toArray();
        }   
      }      
    }
    return view('content.boot', $data);
  }
  
	public function index(){
	  
    $data = [];
    $data['title'] = 'Fashion Brands';
    return view('content.home', $data);
   
	}
  
  public function gallery(){
    
    $data = [];
    $data['title'] = 'Gallery';
    return view('content.gallery', $data);
  }
  
  public function memoryGame(){
    
    $data = [];
    $data['title'] = 'Brands Game';
    return view('content.memoryGame', $data);
  }   
    
}
