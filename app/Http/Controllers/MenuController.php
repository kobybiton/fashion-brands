<?php namespace App\Http\Controllers;

use App\General;
use App\Menu;
use App\Http\Requests;
use App\Http\Requests\MenuValidation;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MenuController extends Controller {

  function __construct(){
    
    //$this->middleware('admin');
  } 

  public function index(){
    
    $data['menus'] = [];
    
    if($menu = menu::all()){
      
      $data['menus'] = $menu->toArray();
      
    }
    
    return view('cms.menu', $data);
  }

  public function create(){
    
    $data['menu'] = [];
    
    if($menu = menu::all()){
      
      $data['menu'] = $menu->toArray();
      
    }
    
    return view('cms.add_menu', $data);
  }

  public function store(MenuValidation $request){
    
    Menu::SaveMenu($request); 
    return redirect('cms/menu');    
  }

  public function show($id){
    
    return view('cms.delete_menu', compact('id'));
  }

  public function edit($id){
  
    if($data['menu'] = Menu::find($id)->toArray()){
      
      return view('cms.edit_menu', $data);             
    }
          
  }
  
  public function update($id, MenuValidation $request){
    
    if(Menu::updateMenu($id, $request)){
      
      return redirect('cms/menu');  
      
    } else {
      
      return redirect('cms/menu/' . $id . '/edit');
      }   
  }

  public function destroy($id){
    
    General::generalDeletion($id, false, 'Menu', 'The Menu has been deleted successfully!');
    return redirect('cms/menu');    
  }

}
