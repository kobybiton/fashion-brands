<?php namespace App\Http\Controllers;

use DB;
use App\General;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SearchController extends Controller {

  public function search($search){
  
    $search = General::xss_clean($search);

    if($search){

      $results = DB::select("SELECT title, c.name, p.url, p.image FROM products p JOIN categories c
                             ON p.categorie_id = c.id WHERE title LIKE '$search%'");
      $products = '';
      $products = '<div class="row" style="margin: 0">';

      if($results){

        foreach($results as $result){
            
          if($result->name != 'Discounts'){
           
            $products .= "<div class='col-md-6 text-center col'>";
            $products .= "<a href=\"" . url('shop') . '/' . $result->name . '/' . $result->url . "\">$result->title<br> <img class='search-images' src=\"" . url('/') . '/' . 'admin_img/' . $result->image .  "\"width='70%' height='250px'></a><br>";
            $products .="</div>";
          
          }
       
        }

      } else{
        $products .='<div class="search-no-results"><p>No results for this search</p></div>'; 
      }
      
      $products .="</div>";
      return $products;

    }
  
  }

}


