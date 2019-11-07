@extends('cms.master')

@section('content')
  
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
            
  
    <div class="container"> 
      <div class="row login-container">  
        <div class="col-md-12">
          
          <form action="{{ url('cms/menu') }}" method="POST" enctype="multipart/form-data">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="header">
               <div>
                  <p> Add Menu </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
               </div>
            </div><br>
          <div class="menu-wrapper">
            <div class="label-wrapper">         
              <label>Link</label>
              <input type="text" class="item-title" name="link" placeholder="Enter Link"><br>
                                
              <label>Url</label>
              <input type="text" class="item-title" name="url" placeholder="Enter Url"><br>            
            </div>      
                
            <div class="buttons"> 
              <button type="submit" class="save" name="submit"> Save </button>
              <a class="cancel" href="{{ url('cms/menu') }}">Cancel</a>
            </div>
          </div>  
        </form>
       </div>
      
    </div>
    
  </div>
  
@stop






