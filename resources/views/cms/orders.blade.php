@extends('cms.master')

@section('content')
     <div class="container">
       <div class="form-container">
        
        
          <div class="header">
            <div>
               <p> Orders </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
            </div>
          </div><br>        
        </div>      
        
     
       <div class="col-md-11 text-center col">        
        
       @if(count($orders) > 0)
            
        @foreach($orders as $order)
        
        <?php $total = 0; ?>
        
          <div class="col-md-3 text-center col"> 
            
            <span class="order_title">
              
              <p>Order Date: {{ $order->created_at }}</p>
              <p>Client Name: {{ $order->name }}</p>  
              <p>Client Email: {{ $order->email }}</p>  
              
            </span>          
   
            <div class="bottom">
                 
              <div class="details">
                
                @foreach(json_decode ($order->data) as $details)
                
                  <p>Name: {{ $details->name }} </p>
                  <img class="circle" src="{{ asset('admin_img/' . $details->attributes->img) }}" width="50px" height="50px"><br>
                  <p>Price: {{ '$' . $details->price }} </p>
                  <p class="mini-border">Quantity: {{ $details->quantity }} </p>                                    
                  <?php $total += $details->quantity * $details->price;?> 
                
                @endforeach
                
                <p class="border">Total: ${{ $total }}</p>
             
              </div>  
                          
            </div>
            <a href="{{ url('cms/orders/' . $order->id) }}"<input type="button" class="btn btn-danger update_item"/>Delete</a> 
           
          </div>          
        
        @endforeach 
      
      <?php $total_orders = 0; ?>
      @foreach($orders as $order)
        @foreach(json_decode ($order->data) as $details)
          <?php $total_orders += $details->quantity * $details->price; ?>                  
        @endforeach
      @endforeach
        
        <div class="col-md-12 text-center col">   
          <div class="table">
            <div>     
              <span class="total-cash">Total Cash</span>
              <div class="total_circle">
                 ${{ $total_orders }}
              </div>
            </div>
           </div>
         </div>  

    @else
      <div class="row well">
        <div class="col-md-12 text-center">
          <span class="error"> there are no orders.. </span><br />
       </div>
     </div>
    @endif
  </div>  
 </div>    
@stop