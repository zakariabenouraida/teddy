@extends('layouts.app')

@section('content')
    <div class="container-fluid">
	<div class="row">
    <div class="col-md-1">
</div>
		<div class="col-md-6">
        <img src="/storage/{{$product->productImage}}"class="w-100"><br>
		</div>
		<div class="col-md-4">
        <p>{{$product->productName}}</p>
        <p>{{$product->productPrice}} $</p>
        <form action="{{ url('add-to-cart/'.$product->id) }}" method="post">
        @csrf
          <div class="form-group">
              <label for="productSize">SIZE:</label>
              <select type="text" class="form-control" name="productSize">
              @foreach($sizes as $size)
              <option value="{{$size->size}}">{{$size->size}}</option>
              @endforeach
              </select>
          </div>    
          <div class="form-group">
              <label for="productQuantity">QUANTITY:</label>
                <input type="number" min="1" max="10" value="1" name="productQuantity">
          </div>    
          <p>{!!$product->productDetails!!}</p><BR>
          <a href="{{ url('add-to-cart/'.$product->id) }}"><button type="submit" class="btn btn-primary">ADD to cart</button></a>
</form>
<div>
@foreach($suggestions as $suggestion)
<a href="/showproduct/{{ $product->id }}/{{$product->productCategory_id}}"><img src="/storage/{{$suggestion->productImage}}"class="w-100"><br></a>
@endforeach
</div>
        </div>
        <div class="col-md-1">
</div>
	</div>
</div>
@endsection