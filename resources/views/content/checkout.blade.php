@extends('layout')

@section('content')
 
  <div class="container">
   
     
      @if(!Cart::isEmpty())
       
          <?php $sort = Cart::getContent()->toArray(); sort($sort); ?>
           @foreach($sort as $item)
             <div class="row well">
               <div class="col-md-12 text-center"> 
                 <div class="col-md-3 text-center">              
                   <h2 class="checkout-title">{{ $item['name'] }}</h2>   
                 </div>  
                 <div class="col-md-3 text-center">      
                   <img class="checkout-images" src="{{ asset('admin_img/' . $item['attributes']['img']) }}">
                 </div>                  
                 <div class="col-md-3 text-center">
                   <input data-op="plus" data-id="{{ $item['id'] }}" type="button" class="btn btn-default update-item-checkout" value="Add More" />                  
                   <p><input class="quantity" type="text" disabled size="1" value="{{ $item['quantity'] }}"/></p>
                   @if($item['quantity'] > 1)
                     <input data-op="minus" data-id="{{ $item['id'] }}" type="button" class="btn btn-default update-item-checkout" value="Reduce" />
                   @else
                     <input data-op="minus" data-id="{{ $item['id'] }}" type="button" class="btn btn-danger update-item-checkout" value="Remove" />
                   @endif
                 </div>
                 <div class="col-md-3 text-center">
                   <div class="checkout-price">{{ '$' . $item['price'] * $item['quantity'] }}</div>
                 </div>        
               </div> 
             </div>    
           @endforeach         
            
       <div class="row well checkout-container">
        <div class="col-md-12 text-center">           
          <a class="return" href="{{ url('shop') }}">Return To Shop..</a><br />
          <span class="total">Total Collections </span>
          <div class="total_circle"> ${{ Cart::getTotal()}} </div>
            <div class="sign">
              <a href='{{ url('user/login') }}' class='button'>Sing In</a>&nbsp;&nbsp;
              <a href='{{ url('user/register') }}' class='button'>Register</a>
              <p><a class="btn btn-primary buy" href="{{ url('cart/order') }}" role="button">Buy! </a></p>  
            </div>                            
         </div>        
      </div> 
      @else
        <div class="row well">
          <div class="col-md-12 text-center">
            <span class="error"> there are no products in you'r Cart Collection... </span><br />
           <a class="return" href="{{ url('shop') }}">Lets Go Shopping!</a>
         </div>
       </div>
      @endif
      
  </div>    
@stop
