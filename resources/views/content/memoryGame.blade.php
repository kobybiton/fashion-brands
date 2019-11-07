@extends('layout')

@section('content')

 <div class="score"></div>
  <div class="cards-container">
    <h1>Brands Game</h1>
    <a class="return" href="{{ url('shop') }}">Return To Shop!</a>
    <h4>Get <b>50%</b> discount on any Brand!</h4>
    <div class="game-over"><p> Congrdiulation! </p><h4><a href="{{ url('shop/discounts') }}"/> click here to Get you'r 50% discount coupon on any Brand!</a></h4></div>  
    <button class="btn">Play Again ;)</button>
    
  </div>
     
@stop

@section('memoryGame_style')

  <link rel="stylesheet" type="text/css" href="{{ asset('css/memoryGame.css') }}" />
  
@stop

@section('memoryGame_js')

  <script src="{{ asset('js/memoryGame/memoryGame.js') }}"></script>
  
@stop
