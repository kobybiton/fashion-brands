@extends('cms.master')

@section('content')
    
   <div class="container">
     
     <div class="form-container">
        <div class="header">
          <div>
             <p> Menu </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
          </div>
        </div><br>        
      </div>      
     
     <div class="col-md-11 text-center col">   
       <a class="btn btn-default add-item" title="click here to add some products" href="{{ url('cms/menu/create') }}"  role="button"> + Add Menu</a> 
     </div>
     
     @foreach($menus as $menu)
      <div class="col-md-3 text-center col">            
          <h2 class="title"> Link: {{ $menu['link'] }}</h2> 
          <h3 class="title"> Url: {{ $menu['url'] }}</h3>          
     
        <div class="bottom">
          <a href="{{ url('cms/menu/' . $menu['id'] . '/edit') }}"<input type="button" class="btn btn-default update_item"/>Update</a>                 
          <a href="{{ url('cms/menu/' . $menu['id']) }}"<input type="button" class="btn btn-danger update_item"/>Delete</a>   
                        
        </div> 
      </div>  
     @endforeach        

  </div>
         
@stop