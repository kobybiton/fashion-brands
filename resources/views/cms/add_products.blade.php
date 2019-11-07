@extends('cms.master')

@section('content')
  
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
            
  
    <div class="container"> 
      <div class="row login-container">  
        <div class="col-md-12">
     
         @if(count($categories) > 0)
          
          <form action="{{ url('cms/products') }}" method="POST" enctype="multipart/form-data">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="categorie_default" value="default" />
            
            <div class="header">
               <div>
                  <p> Add Products </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
               </div>
            </div><br>
            
              <label>Categorie</label>
              
              <select name="categorie" class="item-categorie">
                
                <option value="default">Choose categorie...</option>
                
                @foreach($categories as $categorie)
                  
                  <option value="{{ $categorie['id'] }}">{{ $categorie['name'] }}</option>
                
                @endforeach
                
              </select>
             
              <label>Product title</label>
              <input type="text" class="item-title" name="title" placeholder="Enter title"><br>
                 
              <label>Product price</label>
              <input type="text" class="item-price" name="price" placeholder="Enter price">
            
              <label>Product image</label>
              <input type="file" class="item-image" name="upload_file" /><br>
              
              <div class="wysiwyg">
                <label>Product article</label> &nbsp; <span class="notice">notice! when resizing the screen please refresh to size me :)</span>
                <textarea class="item-article" name="article"></textarea>
              </div><br>          
              <div class="buttons"> 
                <button type="submit" class="save" name="submit"> Save </button>
                <a class="cancel" href="{{ url('cms/products') }}">Cancel</a>
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






