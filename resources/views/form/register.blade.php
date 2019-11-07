@extends('layout')
@section('content')
   
   <div class="container">    
     <div class="row login-container">   
       <form method="post" action="{{ url('user/registerUser') }}">
         <input type="hidden" name="_token" value="{{ csrf_token() }}" />  
            <div class="col-md-6"> 
              <div class="header">
                <div>
                  <p> Register </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
                </div>
             </div>
            </div>   
          <br>

         <div class="col-md-6"> 
           <label for="name">Name:</label><br>
           <input type="text" class="name-field" placeholder="Name" name="name"><br><br>   
          
           <label for="email">Email:</label><br>
           <input type="text" class="email-field" placeholder="Email" name="email"><br><br>
      
           <label for="Password">Password:</label><br>
           <input type="password" class="password-field" placeholder="password" name="password"><br><br>
     
           <label for="Confirm-Password">Confirm Password:</label><br>
           <input type="password" class="Confirm-Password-field" placeholder="Confirm Password" name="Confirm-Password"><br><br>
          
           <input type="submit" class="submit" name="submit" value="Register">
         </div>     
        </form>
     </div>  
   </div>

@stop
