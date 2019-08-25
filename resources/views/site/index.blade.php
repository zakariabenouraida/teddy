@extends('site.layout')

@section('content')
<div class="row">
@foreach($products as $product)
            <div class="col-4 pb-4">
              
            {{$product->productImage}}<br>
            {{$product->productName}}<br>
            {{$product->productPrice}}

              
            </div>
        @endforeach
    </div>
@endsection