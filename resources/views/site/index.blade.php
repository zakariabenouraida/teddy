@extends('site.layout')

@section('content')
<div class="row m-5">
@foreach($products as $product)
            <div class="col-4 pb-4">
              
            <img src="/storage/{{$product->productImage}}"class="w-100"><br>
            {{$product->productName}}<br>
            {{$product->productPrice}}<br>
            <a href="/site/{{ $product->id }}">see product</a>

              
            </div>
        @endforeach
    </div>
@endsection