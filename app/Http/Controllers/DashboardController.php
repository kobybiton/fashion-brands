<?php namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller {
  
  function __construct(){
    
    //$this->middleware('admin');
  }
  
	public function index(){

    $data['categories'] = [];
    
    $sql = "SELECT * FROM categories"; 
            
    $data['categories'] = DB::select($sql); 	
    
    $data['products'] = [];
    
    $sql = "SELECT * FROM products"; 
            
    $data['products'] = DB::select($sql);    
    
    $data['users'] = [];
    
    $sql = "SELECT * FROM users"; 
            
    $data['users'] = DB::select($sql);  
    
    $data['orders'] = [];
    
    $sql = "SELECT * FROM orders"; 
            
    $data['orders'] = DB::select($sql);  
    
    $data['contacts'] = [];
    
    $sql = "SELECT * FROM contacts"; 
            
    $data['contacts'] = DB::select($sql);    
    
    $data['orders'] = [];
    
    $sql = "SELECT * FROM orders"; 
            
    $data['orders'] = DB::select($sql);              
	 
    return view('cms.dashboard', $data);
	}
 
}
