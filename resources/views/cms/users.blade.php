@extends('cms.master')

@section('content')

   <div class="container">
     
     <div class="form-container">          
         <div class="header">
           <div>
              <p> Users </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
           </div>
         </div><br>        
       </div>     
         
      <div class="col-md-11 text-center col">         
         
        @if(count($users) > 0)
                 
          @foreach($users as $user)
       
            <div class="col-md-3 text-center col"> 
              
              <span class="order_title">
                
                <p>Register Date: {{ $user->created_at }}</p>
                <p>User Name: {{ $user->name }}</p>  
                <p>User Email: {{ $user->email }}</p>  
                
              </span>          
     
              <a href="{{ url('cms/users/' . $user->id) }}"<input type="button" class="btn btn-danger update_item"/>Delete</a> 
             
            </div>          
          
          @endforeach
           
       </div>
                
   </div>  

    @else
      <div class="row well">
        <div class="col-md-12 text-center">
          <span class="error"> there are no Users.. </span><br />
       </div>
     </div>
    @endif
      
@stop