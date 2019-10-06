@extends('layouts.app')

@section('content')
<div class="topnav">
  <a href="/showcategory/1">Hoodies</a>
  <a href="/showcategory/2">Sweaters</a>
  <a href="/showcategory/3">Shirts</a>
  <a href="/showcategory/4">Pants</a>
  <a href="/showcategory/5">Accessories</a>
</div>
<div class="row m-5">
@foreach($products as $product)
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pb-4 fadein"style="text-align:center;">
              
            <a href="/showproduct/{{ $product->id }}/{{$product->productCategory_id}}"><img src="/storage/{{$product->productImage}}"class="w-100 h-60"><a><br>
            {{ str_limit(($product->productName),19) }}<br>
            {{$product->productPrice}} $<br>
            <a href="/showproduct/{{ $product->id }}" class="btn btn-block btn-xs btn-warning"><span class="glyphicon glyphicon-tag"></span> See Product</a>

              
            </div>
        @endforeach
    </div>
@endsection