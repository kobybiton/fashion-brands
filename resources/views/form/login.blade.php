@extends('layout')
@section('content')
   <div class="container">    
     <div class="row login-container">  
           
        <div class="col-md-6"> 
          <div class="header">
            <div>
             <p> Sign In </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
            </div>
         </div>
        </div>   
      <br>
      
  <div class="col-md-6">   
     <form method="post" action="{{ url('user/loginUser') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />   
      @if($destination)  
       <input type="hidden" name="destination" value="{{ $destination }}" />  
      @endif         
      
      <div class="login">
        <label for="email">Email:</label><br>
        <input type="text" class="email-field" placeholder="username" name="email"><br><br>
        
        <label for="email">Password:</label><br>
        <input type="password" class="password-field" placeholder="password" name="password"><br><br>
        
        <input type="submit" class="submit" name="submit" value="Sign In">
        
         </div>
     </form>
   </div> 
 </div>      
</div>   

@stop
