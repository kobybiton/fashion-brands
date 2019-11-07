@extends('cms.master')

@section('content')

  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
  <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

    <div class="container"> 
      <div class="row form-container">  
        <div class="col-md-12">
     
     
     @if(count($categories) > 0)
      
      <form action="{{ url('cms/products/' . $product['id']) }}" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PATCH" />
        
        <div class="header">
           <div>
              <p> Update Products </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
           </div>
        </div><br>
        
          <label>Categorie</label>
          
          <select name="categorie" class="item-categorie">
            
            @foreach($categories as $categorie)
              
              <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
            
            @endforeach
            
          </select>
         
          <label>Product title</label>
          <input type="text" value="{{ $product['title'] }}" class="item-title" name="title" placeholder="Enter title"><br>
             
          <label>Product price</label>
          <input type="text" value="{{ $product['price'] }}" class="item-price" name="price" placeholder="Enter price"><br>
        
          <label>Product image</label>
          <input type="file" class="item-image" name="upload_file" /><br>
          <img class="images" src="{{ asset('admin_img/' . $product['image']) }}" width="200px" height="100px"><br>
          
          <div class="wysiwyg">
            <label>Product article</label>&nbsp; <span class="notice">notice! when resizing the screen please refresh to size me :)</span>
            <textarea class="item-article" name="article"> {!! $product['article'] !!}</textarea>
          </div><br>          
          <div class="buttons">
            <button type="submit" class="save" name="submit"> Update </button>
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
