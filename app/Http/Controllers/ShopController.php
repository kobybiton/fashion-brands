<?php namespace App\Http\Controllers;

use App\General;
use App\Categorie;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ShopController extends Controller {

	public function index(){
	      
    $data['categories'] = [];
    $data['title'] = 'shop';
    $categories = Categorie::all();
    
    if($categories){
      
      $data['categories'] = $categories->toArray();        
    }  
   
    return view('content.categories' , $data);
  }

  public function products($cat){
  
    $cat = General::xss_clean($cat);
    $data['products'] = [];
  
    if($cat){
  
      $categorie = Categorie::where('url', '=', $cat)->first();
    
      if($categorie){
    
        $categorie->toArray();
        $products = Categorie::find($categorie['id'])->products;
    
        if($products){
          
          $data['cat'] = $cat;
          $data['products'] = $products->toArray();
          $data['title'] = $categorie['name'] . ' Brand';
        } 
      }
    }
   
  return view('content.products', $data);
  
  }
  
  public function item($cat, $item){
    
    $data = [];
     
    $item = General::xss_clean($item);
    
    if($item){
      
      $Product = Product::where('url', '=', $item)->first();
     
      if($Product){
        
        $data = $Product->toArray();
        $data['cat'] = $cat;
      }
    }
    return view('content.item', $data);
  }

}


  