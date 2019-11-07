@extends('cms.master')

@section('content')
    
    <div class="container"> 
      <div class="row form-container">  
        <div class="col-md-12">
          <form action="{{ url('cms/menu/' . $id) }}" method="post">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="DELETE">
            <div class="delete-wrapper">
              <div class="header">
                 <div>
                    <p> Please confirm deletion.. </p><br><span><img src="{{ asset('images/fashion.jpg') }}" class="delete-logo"/></span>
                 </div>
              </div><br>
              <div class="buttons">   
                <button type="submit" class="delete" name="submit"> Delete Menu </button>
                <a class="delet-cancel" href="{{ url('cms/menu') }}">Cancel</a>
              </div> 
            </div>  
          </form>
       
        </div>
      </div>    
    </div>
    

@stop
