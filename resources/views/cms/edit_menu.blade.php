@extends('cms.master')

@section('content')

  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
  <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

    <div class="container"> 
      <div class="row form-container">  
        <div class="col-md-12">
     
     @if(count($menu) > 0)
       
        <form action="{{ url('cms/menu/' . $menu['id']) }}" method="POST">
          
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="_method" value="PATCH" />
          
          <div class="header">
             <div>
                <p> Update Menu </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="sign-in-logo"/></span>
             </div>
          </div><br>
  
          <div class="menu-wrapper">
            <div class="label-wrapper">            
            <label for="link">Link</label>
            <input type="text" value="{{ $menu['link'] }}" class="item-title" name="link" placeholder="Enter Link"><br>

            <label for="url">Url</label>
            <input type="text" value="{{ $menu['link'] }}" class="item-title" name="url" placeholder="Enter Url"><br>  
          </div>
          
            <div class="buttons">
              <button type="submit" class="save" name="submit"> Update </button>
              <a class="cancel" href="{{ url('cms/menu') }}">Cancel</a>
            </div>
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
