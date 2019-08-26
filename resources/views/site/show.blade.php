@extends('site.layout')

@section('content')
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
        <img src="{{$product->productImage}}"><br>
		</div>
		<div class="col-md-4">
        <p>{{$product->productName}}</p>
        <p>{{$product->productPrice}} $</p>
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
          <button>BUY NOW</button>
		</div>
	</div>
</div>
@endsection