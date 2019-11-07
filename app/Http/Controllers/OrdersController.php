<?php namespace App\Http\Controllers;

use DB;
use App\General;
use App\Order;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OrdersController extends Controller {

  function __construct(){
    
    //$this->middleware('admin');
  }	
  
  public function index(){
    
    $data['orders'] = [];
    
    $sql = "SELECT u.name , u.email, o.* FROM orders o
            JOIN users u ON u.id = o.user_id"; 
            
    $data['orders'] = DB::select($sql);    
    
    return view('cms.orders', $data);
  }
  
  	public function show($id){
		
      return view('cms.delete_order', compact('id'));
	}
  
  
  public function destroy($id){
	  
    General::generalDeletion($id, false, 'Order', 'The Order has been deleted successfully!');
    return redirect('cms/orders');
  }  

}
