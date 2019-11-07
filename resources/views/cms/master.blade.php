<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
     
    <title> Fashion Brands Cms </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}" />
    
  </head>

  <body>


    <header>
       <div class="navbar navbar-inverse navbar-fixed-top" bar>
        <div class="container-fluid"> 

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">             
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('images/logo.jpg') }}" class="logo"/></a>
          <ul class="nav navbar-nav navbar-left collapse navbar-collapse  text-center" id="list" >      
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a><li>
            <li><a href="{{ url('gallery') }}"><i class="fa fa-instagram"></i> Gallery</a></li>
            <li><a href="{{ url('shop') }}"><i class="fa fa-shopping-cart"></i> Shop</a></li> 
            
            @if($menu = App\Menu::all()) 
              @foreach($menu->toArray() as $title)
                <li><a href="{{ $title['url'] }}"> {{ $title['link'] }} </a></li>          
              @endforeach  
            @endif  
            
          </ul>        
           <ul class="nav navbar-nav navbar-right collapse navbar-collapse  text-center">                   
             
              <li><a class="user_name" href="#">Welcome &nbsp;{{ Session::get('user_name') }}</a></li>
     
              <li><a href="{{ url('user/logout') }}">Logout</a></li>
                                     
          </ul>  
        </div> 
      </div>
    </header>
	
  <div class="row">
    <div class="col-md-12 cms-container">
	
	  <h1>Cms</h1>
	  <p>Content Managment System</p>
	
	</div>
  </div>	
    <div class="row">
      <div class="col-md-1">
        <ul class="nav nav-pills nav-stacked">

          <li><a href="{{ url('cms/dashboard') }}" title="click here to manage Dashboard"><i class="fa fa-tachometer"></i><br /> Dashboard </a></li>
          <li><a href="{{ url('cms/menu') }}" title="click here to manage Menu"><i class="fa fa-book"></i><br /> Menu </a></li>
          <li><a href="{{ url('cms/categories') }}" title="click here to manage Categiries"><i class="fa fa-cube"></i><br />  Categiries </a></li>
          <li><a href="{{ url('cms/products') }}" title="click here to manage Products"><i class="fa fa-cubes"></i><br />  Products </a></li>
          <li><a href="{{ url('cms/orders') }}" title="click here to view Orders"><i class="fa fa-cart-plus"></i><br /> Orders </a></li>
          <li><a href="{{ url('cms/contacts') }}" title="click here to manage Contancts"><i class="fa fa-whatsapp"></i><br />  Contacts </a></li>
          <li><a href="{{ url('cms/users') }}" title="click here to view Users"><i class="fa fa-users"></i><br /> Users </a></li>
          <li><a href="{{ url('/') }}" title="click here to Back you'r site"><img src="{{ asset('images/logo.jpg') }}" width="30px" class="cms-logo"/><br /> Back to site </a></li>

        </ul>  
      </div>  
      
    <div class="dropdown">
      <button class="dropdown-toggle">Cms Menu</button>
    </div> 
    
<div id="cms-container">   
  <div class="col-md-11">
	        
  @if(Session::has('admin'))  
     @if(Session::has('success'))
        <div class="col-md-11">
          <div class="alert-cms">
            <p>{{ Session::get('success') }}</p>
          </div>
        </div>
    @endif        
  @endif   
  
@if(!Session::has('admin'))   
  @if(Session::has('success'))
    <div class="row">
      <div class="col-md-11">
        <div class="alert-cms">           
          <p>{{ Session::get('success') }}</p>
       </div>
     </div>
   </div> 
  @endif      
@endif   	        
	       
@if($errors->any())         
  <div class="row">
     <div class="col-md-11">
        <div class="alert-cms ">   
        @foreach($errors->all() as $error)
          <p> {{ $error }} </p>
        @endforeach
       </div>
     </div>
   </div>        
 @endif
 
 @if(Session::has('error')) 
     <div class="row">
      <div class="col-md-11">
        <div class="alert-cms">       
          <p> {{ Session::get('error') }} </p>          
        </div>  
      </div>
    </div>   
 @endif 	       
	                    
	      @yield('content') 
	        
	   </div>
   </div>    
 </div> 
   
   <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
   <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script> 
   <script src="{{ asset('js/script.js') }}"></script> 
   
  </body>
</html>

