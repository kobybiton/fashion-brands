@extends('cms.master')

@section('content')
  
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
            
  
    <div class="container"> 
      <div class="row login-container">  
        <div class="col-md-12">
          
          <form action="{{ url('cms/categories') }}" method="POST" enctype="multipart/form-data">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="header">
               <div>
                  <p> Add Categories </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
               </div>
            </div><br>
                     
              <label>Categorie Name</label>
              <input type="text" class="item-title" name="name" placeholder="Enter Name"><br>
            
              <label>Categorie image</label>
              <input type="file" class="item-image" name="upload_file" /><br>
              
              <div class="wysiwyg">
                <label>Categorie article</label> &nbsp; <span class="notice">notice! when resizing the screen please refresh to size me :)</span>
                <textarea class="item-article" name="article"></textarea>
              </div><br>          
              <div class="buttons"> 
                <button type="submit" class="save" name="submit"> Save </button>
                <a class="cancel" href="{{ url('cms/categories') }}">Cancel</a>
              </div>
          </form>
       </div>
      
    </div>
    
  </div>
  
@stop






