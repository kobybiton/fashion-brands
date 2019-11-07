<?php namespace App\Http\Controllers;

use Input;
use Session;
use App\ShoppingCart;
use App\Order;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CartController extends Controller {

	public function addToCart(){
    
   ShoppingCart::addToCart(Input::get('id')); 
   
	}
  
  public function update(){
    
     ShoppingCart::updateCart(Input::all());
  }
  
  public function checkout(){
    
    return view('content.checkout');
  }  
  
  public function order(){
    
    if(!Session::has('user_id')){
      
      Session::flash('error', 'In order to purches you have to be a member, please sign in..');
      return redirect('user/login?destination=cart/checkout');
    
    } else {
      
      Order::saveOrder();
      return redirect('shop');
    }
  }
}


