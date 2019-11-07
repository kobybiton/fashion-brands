@extends('layout')

@section('content')
  
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
            
    <div class="container"> 
      <div class="row contact-container">  
        <div class="col-md-12">      
          <form action="{{ url('user/saveComment') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="header">
               <div>
                  <p> Contact Us </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
               </div>
            </div><br>
      
            <label for="name">Name:</label>
            <input type="text" class="name-field" placeholder="Name" name="name">
             
            <label for="email">Email:</label>
            <input type="text" class="email-field" placeholder="Email" name="email">          
                    
            <label for="subject">Subject</label>
            <input type="text" class="item-title" name="subject" placeholder="Enter Subject"><br>
                  
            <div class="wysiwyg">
              <label>Article</label>
              <textarea class="item-article" name="article"></textarea>
            </div><br>      
                
            <div class="buttons"> 
              <button type="submit" class="save" name="submit"> Save </button>
            </div>
          
        </form>        
    </div>
  </div>
 </div> 
@stop
