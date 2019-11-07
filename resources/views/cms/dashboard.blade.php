@extends('cms.master')

@section('content')

    <div class="container"> 
        <div class="form-container">
     
        @if(count($categories) > 0)
          
          <?php $total = 0; ?>
         
            <div class="header">
              <div>
                 <p> Dashboard </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
              </div>
            </div><br>        
          </div>
          
          <div class="col-md-6 text-center col"> 
            
            <span class="dashboard-column">
              
              <p><i class="fa fa-cube"></i> <br> Total Categories <br> <span class="count"> <?= count($categories); ?>  </span></p> 
              
            </span>           
           
          </div>
          
          
          <div class="col-md-6 text-center col"> 
            
            <span class="dashboard-column">
              
              <p><i class="fa fa-cubes"></i> <br> Total Products <br> <span class="count"> <?= count($products); ?> </span></p> 
              
            </span>           
           
          </div>            
          
          <div class="col-md-6 text-center col"> 
            
            <span class="dashboard-column">
              
              <p> <i class="fa fa-users"></i> <br> Total Users <br> <span class="count"> <?= count($users); ?> </span></p> 
              
            </span>           
           
          </div>                              
              
          <div class="col-md-6 text-center col"> 
            
            <span class="dashboard-column">
              
              <p><i class="fa fa-whatsapp"></i> <br> Total Contacts <br> <span class="count"> <?= count($contacts); ?> </span></p> 
                           
            </span>           
           
          </div>                 

          <div class="col-md-6 text-center col"> 
            
            <span class="dashboard-column">
              
              <p><i class="fa fa-cart-plus"></i> <br> Total Orders <br> <span class="count"> <?= count($orders); ?> </span></p> 
              
            </span>           
           
          </div>
          
          <div class="col-md-6 text-center col"> 
            
            <span class="dashboard-column">
               
              @foreach($orders as $order)
                @foreach(json_decode ($order->data) as $details)
                  <?php $total += $details->quantity * $details->price;?>                  
                @endforeach
              @endforeach
              
              <p><i class="fa fa-money"></i> <br> Total Cash <br> <span class="count"> ${{ $total }} </span></p>  
              
            </span>           
           
          </div>                
     
   </div>  
 </div>    

    @else
      <div class="row well">
        <div class="col-md-12 text-center">
          <span class="error"> there are no Contacts.. </span><br />
       </div>
     </div>
    @endif
      
@stop