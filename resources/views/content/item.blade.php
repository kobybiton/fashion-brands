@extends('layout')

@section('content')

  <div class="row well">
   @if(!empty($title))
    <div class="col-md-7 text-center col">
      <img class="item-images image-responsive" src="{{ asset('admin_img/' . $image) }}">
      <img class="item-sold" @if(Cart::get($id)) style="display: block" @endif  src="{{ asset('images/sold.jpg') }}">
      @if($cat == 'discounts')
        <img class="item-discount" data-discount="{{ $id }}" @if(Cart::get($id)) style= "visibility: hidden" @endif src="{{ asset('images/discount_cover.jpg') }}">
      @endif
      <h2 class="product-title"> {{ $title }} </h2>
      <p class="product-article"> {!! $article !!} </p>
      <p><b> price: </b> {{ ' $' . $price }} </p>
        @if(!Cart::get($id))
          <button class="btn btn-success cart-button addToCart" data-id="{{ $id }}" role="button">Add To Cart</button>
        @else 
          <button class="btn btn-danger cart-button addToCart" data-id="{{ $id }}" role="button">Remove From Cart</button>
        @endif
        <a class="btn btn-primary cart-button" href="{{ url('cart/checkout' ) }}"  role="button">checkout »</a><br />
        <a class="return" href="{{ url('shop/'. $cat) }}">Return back..</a>
    </div> 
    
    <div class="col-md-3 text-center col">
      
      <p> <b> Shipping: FREE Expedited Int'l Shipping </b>| See details International items may be subject to customs processing and additional charges. Item location:<b> ISRAEL, Tel-Aviv </b>Ships to: Worldwide See exclusions</p>
      <p><b> Delivery </b>: Estimated Seller ships within 1 day after receiving cleared payment </p>
      <p><b> Payments: PayPal </b> | <img src="{{ asset('images/credit-cards.jpg') }}" width="100px" height="50px">  Processed by <b>PayPal</b> </p>
      <p><b> Returns </b>: 30 days money back or replacement, buyer pays return shipping </p>
      <p><b> Guarantee </b>: <img src="{{ asset('images/fashion.jpg') }}" width="70px" height="50px"> Money Back Guarantee until <b> 14 days <b>. Covers your purchase price and original shipping. </p>
      
    </div>
    @else 
    
    <div class="row well">
      <div class="col-md-12 text-center">
        <span class="error"> sorry, there is no item for this product... </span><br />
        <a class="return" href="{{ url('shop') }}">Return To Shop!</a>
      </div>
    </div>    
    
   @endif        
  </div>

@stop