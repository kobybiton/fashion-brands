@extends('layout')

@section('content')
  <div class="row well">
    @if(count($contents) > 0)
    
      @foreach($contents as $content)
      <div class="col-md-6 text-center col">
        
        <h2>{{ $content['title'] }}</h2>
        <p>{{ $content['article'] }}</p>
        
      </div>
     @endforeach
</div>

  @else
    <div class="row well">
      <div class="col-md-12 text-center">
        <span class="error"> sorry, there is no content for this page... </span><br />
        <a class="return" href="{{ url() }}">Return To Fashion!</a>
      </div>
    </div>
  @endif
@stop