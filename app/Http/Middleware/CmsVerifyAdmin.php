<?php namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\RedirectResponse;

class CmsVerifyAdmin {

	public function handle($request, Closure $next){
    
    if(!Session::has('admin')){
      
      return new RedirectResponse(url('user/login'));
    }
		return $next($request);
	}

}
