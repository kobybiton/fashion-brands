<?php namespace App\Http\Controllers;

use App\General;
use App\Categorie;
use App\Http\Requests;
use App\Http\Requests\SaveCategorieValidation;
use App\Http\Requests\EditCategorieValidation;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CategoriesController extends Controller {

  function __construct(){
    
    //$this->middleware('admin');
  } 

	public function index(){
    
    $data['categories'] = [];
    
    if($categories = categorie::all()){
      
      $data['categories'] = $categories->toArray();
      
    }
    
    return view('cms.categories', $data);
  }

	public function create(){
	  
    $data['categories'] = [];
    
    if($categories = Categorie::all()){
      
      $data['categories'] = $categories->toArray();
      
    }
    return view('cms.add_categories', $data);
	}

	public function store(SaveCategorieValidation $request){
    
    Categorie::saveCategories($request); 
    return redirect('cms/categories');		
	}

  public function show($id){
    
    return view('cms.delete_categorie', compact('id'));
  }

	public function edit($id){
	
    if($data['categorie'] = Categorie::find($id)->toArray()){
      
      return view('cms.edit_categorie', $data);             
    }
         	
	}
  
	public function update($id, EditCategorieValidation $request){
    
    if(Categorie::updateCategorie($id, $request)){
      
      return redirect('cms/categories');  
      
    } else {
      
      return redirect('cms/categories/' . $id . '/edit');
      }		
	}

	public function destroy($id){
	  
    General::generalDeletion($id, true, 'Categorie', 'The Categorie has been deleted successfully!');
    return redirect('cms/categories');		
	}

}
