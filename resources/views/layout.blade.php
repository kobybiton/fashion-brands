<?php $cartCollection = Cart::getContent(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
     
    <title> @if(!empty($title)) {{ $title }} @else Fashion Brands @endif </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gallery.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    @yield('memoryGame_style')
   
  </head>

  <body>
    <div id="container">
      <header>
       <div class="navbar navbar-inverse" id="bar">
        <div class="container-fluid"> 
          <ul class="nav navbar-nav text-center navbar-right" id="login" >   
         
            @if(!Cart::isEmpty())              
              <li><a href="{{ url('cart/checkout' ) }}"><i class="fa fa-cart-plus cart"></i><span> : {{ $cartCollection->count() }} </span></a></li>
            @endif              
 
          </ul>
          
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">             
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a href="{{ url('/') }}" class="navbar-brand">
            <img src="{{ asset('images/logo.jpg') }}" class="logo"/>
          </a>

          <ul class="nav navbar-nav navbar-left collapse navbar-collapse  text-center" id="list" >      
            <li><input type="text" class="search" placeholder="Search Brands"/> </li>
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a><li>
            <li><a href="{{ url('gallery') }}"><i class="fa fa-instagram"></i> Gallery</a></li>
            <li><a href="{{ url('shop') }}"><i class="fa fa-shopping-cart"></i> Shop</a></li> 
            <li><a href="{{ url('user/contact') }}"><i class="fa fa-comments"></i> Contact Us</a></li> 
            <li><a href="{{ url('game') }}"><i class="fa fa-gamepad"></i> Brands Game</a><li>
            
            @if($menu = App\Menu::all())           
              @foreach($menu->toArray() as $title)
                <li><a href="{{ $title['url'] }}"> {{ $title['link'] }} </a></li>         
              @endforeach  
            @endif  
          
          </ul>  
                
          <ul class="nav navbar-nav navbar-right collapse navbar-collapse  text-center" id="list">                   
          
            @if(!Session::has('user_id'))    
             <li><a href="{{ url('user/login') }}">Sign in</a></li> 
             <li><a href="{{ url('user/register') }}">Register</a></li>               
            @else
              <li><a href="#">Welcome &nbsp;{{ Session::get('user_name') }}</a></li>      
            @if(Session::has('admin'))              
              <li><a class="cms" href="{{ url('cms/dashboard') }}">Cms</a></li>              
            @endif
             <li><a href="{{ url('user/logout') }}">Logout</a></li>           
            @endif
        
         </ul>  
       </div>       
     </div>
  </header>
  
  <div class="results"></div> 
  <div id="layout-container">
    <input type="hidden" id="refreshed" value="no">
      
    @if(Session::has('admin'))  
       @if(Session::has('success'))
          
    <div class="alert-wrapper" >
      <div class="alert">  
        <p>{{ Session::get('success') }}</p>
      </div>   
    </div>
    
      @endif        
    @endif   
    
  @if(!Session::has('admin'))   
    @if(Session::has('success'))

    <div class="alert-wrapper" >
      <div class="alert">         
        <p>{{ Session::get('success') }}</p>
      </div>   
    </div>
    
    @endif      
  @endif     
      
      @yield('content')
   
  @if($errors->any())         
   
    <div class="alert-wrapper" >
      <div class="alert">
        @foreach($errors->all() as $error)
          <p> {{ $error }} </p>
        @endforeach
      </div>   
    </div>
         
   @endif
   
   @if(Session::has('error')) 

    <div class="alert-wrapper" >
      <div class="alert">       
        <p> {{ Session::get('error') }} </p>          
      </div>   
    </div> 
    
   @endif     
         
 
 </div>

<footer> 
  <div class="navbar navbar-inverse" id="myfooter">
   <div class="container">
    <div class="row">
     <div class="col-md-3 col-xs-6 col-sm-6 text-center">
      <ul class="list-unstyled list" id="myfooternav-copy">
        <li>
          <p class="copy">Fashion Brands {{ date('Y') }} </p>
          <p class="copy-name"> &copy; Developer Koby Biton </p>
        </li>
      </ul>
  </div>

  <div class="col-md-3 text-center" >
   <ul class="list-unstyled" id="myfooternav">
     <li class="active" ><a href="{{ url('/') }}"><i class="fa fa-home fa-fw fa-1x"></i>&nbsp;Home</a></li>
     <li><a href="{{ url('gallery') }}" ><i class="fa fa-book fa-fw fa-1x"></i>&nbsp;Gallery </a></li>
     <li><a href="{{ url('shop') }}"><i class="fa fa-cart-arrow-down"></i>&nbsp;Shop</a></li>
   </ul>
  </div>

  <div class="col-md-3 hidden-sm hidden-xs text-center footer-icons-wrapper">
   <ul class="list-inline" id="footer-icons">
     <li><a href="http://www.facebook.com"><i class="fa fa-facebook-official fa-3x f"></i></a></li>
     <li><a href="http://www.twitter.com"><i class="fa fa-twitter-square fa-3x t"></i></a></li>
     <li><a href="http://www.googleplus.com"><i class="fa fa-google-plus-square fa-3x g"></i></a></li>
     <li><a href="http://www.youtube.com"><i class="fa fa-youtube-square fa-3x y"></i></a></li>
   </ul>
  </div>

  <div class="col-md-3 col-xs-6  col-sm-6 text-center">
   <ul class="list-unstyled" id="myfooternav">
     <li><a href="{{ url('user/contact') }}"><i class="fa fa-comments"></i> Contact us </a></li>
     <li><a href="{{ url('game') }}"><i class="fa fa-gamepad"></i> Brands Game</a><li>
   </ul>
  </div>
</footer>  
</div>
   <script type="text/javascript"> var BASE_URL = "{{ url('/') }}/" </script>
   <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
   @yield('gallery_slider')
   @yield('home_slider')
   @yield('memoryGame_js') 
   <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script> 
   <script src="{{ asset('js/script.js') }}"></script> 
   <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>

  </body>
</html>

