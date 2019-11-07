@extends('cms.master')

@section('content')
    
  <div class="container">
    
     <div class="form-container">          
         <div class="header">
           <div>
              <p> Products </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
           </div>
         </div><br>        
       </div>     
    
       <div class="col-md-11 text-center col">   
         <a class="btn btn-default add-item" title="click here to add some products" href="{{ url('cms/products/create') }}"  role="button"> + Add Product</a> 
       </div>
       @if(count($products) > 0)
          
         @foreach($products as $product)
           <div class="col-md-3 text-center col"> 
             <h2 class="title">{{ $product['title'] }}</h2> 
             <img class="circle" src="{{ asset('admin_img/' . $product['image']) }}" width="50px" height="50px">           
     
             <div class="bottom">
               <a href="{{ url('cms/products/' . $product['id'] . '/edit') }}"<input type="button" class="btn btn-default update_item"/>Update</a>                               <a href="{{ url('cms/products/' . $product['id']) }}"<input type="button" class="btn btn-danger update_item"/>Delete</a>   
               <div class="price">{{ $product['price'] . '$' }}</div>              
             </div>
           </div>  
         @endforeach        
       
      @endif  
  </div>
         
@stop