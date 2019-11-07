<?php namespace App;

use Session;
use Cart;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model {

	public static function addToCart($id){
	  
    $product = product::find($id);
   
    if(!Cart::get($id)){
        
      if($product){
        
        $product = $product->toArray();
        
        Cart::add(array(
          'id' => $id,
          'name' => $product['title'],
          'price' => $product['price'],
          'quantity' => 1,
          'attributes' => array('img' => $product['image'], 'url' => $product['url'], 'cat'=> $product['categorie_id'])
        ));
      }         
    } else {
      
          Cart::remove($product['id']);
    }
	}
  
  public static function updateCart($input){
    
    if(!empty($input['op']) && !empty($input['id'])){
      
      if($input['op'] == 'plus'){
        
        Cart::update($input['id'], array(
        
          'quantity' => 1,
        ));
        
      } else {
        
        $cart = Cart::get($input['id']);
        
        if($cart['quantity'] -1 == 0){
          
          Cart::remove($input['id']);
        
        } else {
          
          Cart::update($input['id'], array(
          
            'quantity' => -1,
          ));          
        }
      }      
    }
  }
}
