@extends('layouts.app')

@section('content')
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
        <img src="/storage/{{$product->productImage}}"class="w-100"><br>
		</div>
		<div class="col-md-4">
        <p>{{$product->productName}}</p>
        <p>{{$product->productPrice}} $</p>
        <form>
        @csrf
        <input id="post_id" name="productName" type="hidden" value="{{$product->productName}}">
        <input id="post_id" name="productPrice" type="hidden" value="{{$product->productPrice}}">

          <div class="form-group">
              <label for="productSize">SIZE:</label>
              <select type="text" class="form-control" name="productSize">
              <option>S</option>
              <option>M</option>
              <option>L</option>
              <option>XL</option>
              <option>2XL</option>
              </select>
          </div>    
          <div class="form-group">
              <label for="productQuantity">QUANTITY:</label>
                <input type="number" min="1" max="10" value="1" name="productQuantity">
          </div>    
          <p>{!!$product->productDetails!!}</p><BR>
          <button type="submit" class="btn btn-primary">ADD to cart</button>
</form>
        </div>
	</div>
</div>
@endsection