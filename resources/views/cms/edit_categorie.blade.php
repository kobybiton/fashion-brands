@extends('cms.master')

@section('content')

  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
  <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

    <div class="container"> 
      <div class="row form-container">  
        <div class="col-md-12">
     
     
     @if(count($categorie) > 0)
       
        <form action="{{ url('cms/categories/' . $categorie['id']) }}" method="POST" enctype="multipart/form-data">
          
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="_method" value="PATCH" />
          
          <div class="header">
             <div>
                <p> Update Categories </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
             </div>
          </div><br>
  
           
            <label>Categorie title</label>
            <input type="text" value="{{ $categorie['name'] }}" class="item-title" name="name" placeholder="Enter Name"><br>
  
            <label>Categorie image</label>
            <input type="file" class="item-image" name="upload_file" /><br>
            <img class="images" src="{{ asset('admin_img/' . $categorie['image']) }}" width="200px" height="100px"><br>
            
            <div class="wysiwyg">
              <label>Product article</label>&nbsp; <span class="notice">notice! when resizing the screen please refresh to size me :)</span>
              <textarea class="item-article" name="article"> {!! $categorie['article'] !!}</textarea>
            </div><br>          
            <div class="buttons">
              <button type="submit" class="save" name="submit"> Update </button>
              <a class="cancel" href="{{ url('cms/categories') }}">Cancel</a>
            </div>
        </form>
       </div>
    
     @else
     
      <div class="row well">
        <div class="col-md-12 text-center">
          <span class="error"> sorry, there are no categories for this page... </span><br />
        </div>
      </div>
     
     @endif
     
      
    </div>
    
  </div>

@stop
