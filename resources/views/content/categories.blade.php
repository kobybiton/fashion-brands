@extends('layout')

@section('content')

  <div class="row well categories-container">
    @if(count($categories) > 0)
      @foreach($categories as $cat)
        @if($cat['name'] != 'Discounts')
          <div class="col-md-4 text-center col">
            <img class="categories-images" src="{{ asset('admin_img/' . $cat['image']) }}">
            <h2> {{ $cat['name'] }}</h2>
            <p> {!! $cat['article'] !!}</p>
            <p><a class=" btn btn-default start-shopping" href="{{ url('shop/' . $cat['url']) }}" role="button">Start Shopping! »</a></p>
          </div>
          @else
            <div class="col-md-12 text-center col">
              <img class="discount-categorie-image" src="{{ asset('admin_img/' . $cat['image']) }}">
              <h2> {{ $cat['name'] }}</h2>
              <p> {!! $cat['article'] !!}</p>              
              <p><a class=" btn btn-default start-shopping" href="{{ url('game') }}" role="button">Play Brands Game! »</a></p>
            </div>
          @endif
    @endforeach
  </div>
  @else
  <div class="row well">
    <div class="col-md-12 text-center">
      <span class="error"> sorry, there are no categories for this page... </span><br />
      <a class="return" href="{{ url('shop') }}">Return To Shop!</a>
    </div>
  </div>
  @endif

@stop
