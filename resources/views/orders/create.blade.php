@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="row offset-1">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-muted"><a href="/cart" style="text-decoration:none;color:grey;">Update cart</a></span>
              <span class="text-muted"><a href="{{ url('/showproduct') }}" style="text-decoration:none;color:grey;">Continue shopping</a></span>
              <span class="text-muted">Your cart</span>
              <span class="badge badge-secondary badge-pill">{{ count((array)session('cart')) }}</span>
          </h4>
          <?php $total = 0 ?>

          @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            <?php $total += $details['price'] * $details['quantity'] ?>

          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
    <div>            <img src="/storage/{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
              <div class="mt-4">
                <h6 class="my-0">{{ $details['name'] }}</h6>
                <small class="text-muted">id:{{ $details['product_id'] }} |</small>

                <small class="text-muted">Size:{{ $details['size'] }} |</small>
                <small class="text-muted">Qty:{{ $details['quantity'] }} |</small>
                <small class="text-muted">Unite price:${{ $details['price'] }}</small>
              </div>
              <span class=" mt-3 text-muted">${{ $details['price'] * $details['quantity'] }}</span>
            </li>
            @endforeach
        @endif

            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>${{ $total }}</strong>
            </li>
          </ul>


        </div>
        <div class="col-md-6 order-md-1">
          <h4 class="mb-3">Shipping Details</h4>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <p><strong>Full Name : </strong>{{auth()->user()->name}}.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <p><strong>Country : </strong>{{auth()->user()->shippingdetail->shippingCountry}}.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
        <p><strong> City : </strong>{{auth()->user()->shippingdetail->shippingCity}}.</p>
      </div>
    </div> 
    <div class="row">
      <div class="col-md-12">
        <p><strong>Address : </strong>{{auth()->user()->shippingdetail->shippingAddress}}.</p>
    </div>
  </div> 
  <div class="row">
    <div class="col-md-12">
    <p><strong>Zip : </strong>{{auth()->user()->shippingdetail->shippingZip}}.</p>
    </div>
  </div> 
  <div class="row">
    <div class="col-md-12">
    <p><strong>Phone : </strong>{{auth()->user()->shippingdetail->Phone}}.</p>
    </div>
  </div> 

</div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>
<strong>Payment is settled on delivery.</strong>

             <hr class="mb-4"> 
            <form action="{{route('orders.store')}}" method="post">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Confirm order</button>
              @csrf
            <input type="hidden"  name="user_id" value="{{auth()->user()->id}}">
            @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            <input type="hidden"  name="product_id" value="{{ $details['product_id'] }}"readonly><br>

            <input type="hidden"  name="name" value="{{ $details['name'] }}"readonly><br>

            <input type="hidden"  name="size" value="{{ $details['size'] }}"readonly><br>
            <input type="hidden"  name="quantity" value="{{ $details['quantity'] }}"readonly><br>
@endforeach
@endif 

          </form>
        </div>
      </div>
      </div>
      @endsection