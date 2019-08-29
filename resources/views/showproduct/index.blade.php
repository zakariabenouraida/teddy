@extends('layouts.app')

@section('content')
<div class="row m-5">
@foreach($products as $product)
            <div class="col-3 pb-4"style="text-align:center;">
              
            <a href="/showproduct/{{ $product->id }}/{{$product->productCategory_id}}"><img src="/storage/{{$product->productImage}}"class="w-100 h-60"><a><br>
            {{$product->productName}}<br>
            {{$product->productPrice}} $<br>
            <a href="/showproduct/{{ $product->id }}" class="btn btn-block btn-xs btn-warning"><span class="glyphicon glyphicon-tag"></span> See Product</a>

              
            </div>
        @endforeach
    </div>
@endsection