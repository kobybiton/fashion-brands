@extends('cms.master')

@section('content')

   <div class="container">
     
     <div class="form-container">          
         <div class="header">
           <div>
              <p> Contacts </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
           </div>
         </div><br>        
       </div>       
     
       <div class="col-md-11 text-center col">
       
        @if(count($contacts) > 0)
             
          @foreach($contacts as $contact)
       
            <div class="col-md-3 text-center col"> 
              
              <span class="order_title">
                
                <p>Contact Date: {{ $contact->created_at }}</p>
                <p>Client Name: {{ $contact->name }}</p>  
                <p>Client Email: {{ $contact->email }}</p>  
                <p>Subject: {{ $contact->subject }}</p>  
                <p>Article: {!! $contact->article !!}</p>  
                
              </span>          
     
              <a href="{{ url('cms/contacts/' . $contact->id) }}"<input type="button" class="btn btn-danger update_item"/>Delete</a> 
             
            </div>          
          
          @endforeach 
     
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