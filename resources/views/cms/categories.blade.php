@extends('cms.master')

@section('content')
  
 @if(count($categories) > 0)  
   <div class="container">
     
     <div class="form-container">          
         <div class="header">
           <div>
              <p> Categories </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
           </div>
         </div><br>        
       </div>     
     
       <div class="col-md-11 text-center col">   
         <a class="btn btn-default add-item" title="click here to add some products" href="{{ url('cms/categories/create') }}"  role="button"> + Add Categorie</a> 
       </div>
   
       @foreach($categories as $categorie)
         <div class="col-md-3 text-center col"> 
          
           <h2 class="title">{{ $categorie['name'] }}</h2> 
           <img class="circle" src="{{ asset('admin_img/' . $categorie['image']) }}" width="50px" height="50px">           
   
             <div class="bottom">
             <a href="{{ url('cms/categories/' . $categorie['id'] . '/edit') }}"<input type="button" class="btn btn-default update_item"/>Update</a>                 
             <a href="{{ url('cms/categories/' . $categorie['id']) }}"<input type="button" class="btn btn-danger update_item"/>Delete</a>   
             <div class="article">{!! $categorie['article'] !!}</div>              
           </div>
  
         </div>  
       @endforeach        
     @endif
  </div>
         
@stop