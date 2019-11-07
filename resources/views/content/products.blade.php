@extends('layout')

@section('content')
  <div class="row well products-container">
    @if(count($products) > 0)
      @foreach($products as $product)
        <div class="col-md-6 text-center col">
          <img class="products-images" src="{{ asset('admin_img/' . $product['image']) }}">
          <img class="sold" @if(Cart::get($product['id'])) style="display: block" @endif  src="{{ asset('images/sold.jpg') }}">
          @if($cat == 'discounts')
            <img class="discount" data-discount="{{ $product['id'] }}" @if(Cart::get($product['id'])) style= "visibility: hidden" @endif src="{{ asset('images/discount_cover.jpg') }}">
          @endif
          <h2 class="product-title"> {{ $product['title'] }} </h2>
          <p class="product-article"> {!! $product['article'] !!} </p>
          <p><b> price: {{ ' $' . $product['price'] }} </b></p>
          @if(!Cart::get($product['id']))
            <a class="btn btn-success cart-button addToCart" data-id="{{ $product['id'] }}" role="button">Add To Cart</a>
          @else 
            <a class="btn btn-danger cart-button addToCart" data-id="{{ $product['id'] }}" role="button">Remove From Cart</a>
          @endif
          <a class="btn btn-default cart-button" href="{{ url('shop/' . $cat . '/' . $product['url']) }}"  role="button">view details »</a><br />
          <a class="return" href="{{ url('shop') }}">Return back..</a>    
        </div>
      @endforeach
  </div>
  @else
    <div class="row well">
      <div class="col-md-12 text-center">
        <span class="error"> sorry, there are no products for this category... </span><br />
        <a class="return" href="{{ url('shop') }}">Return To Shop!</a>
      </div>
    </div>
  @endif
@stop