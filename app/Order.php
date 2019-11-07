<?php namespace App;

use Session;
use Cart;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {

	public static function saveOrder(){
	  
    $order = new Order();
    $order->user_id = Session::get('user_id');
    $order->data = Cart::getContent()->toJson();
    $order->save();
    Cart::clear();
    Session::flash('success', 'Your order is done successfuly! Thank you for shopping at Fashion Brands site..');
  }

}
