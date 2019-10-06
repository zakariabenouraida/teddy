@extends('layouts.app')
@section('content')
    <div class="topnav">
      <a href="/showcategory/1">Hoodies</a>
      <a href="/showcategory/2">Sweaters</a>
      <a href="/showcategory/3">SHIRTS</a>
      <a href="/showcategory/4">Pants</a>
      <a href="/showcategory/5">Accessories</a>
    </div>

    <div class="container-fluid mt-5">
	<div class="row">
    <div class="col-md-1">
</div>
		<div class="col-md-6">
        <img src="/storage/{{$product->productImage}}"class="w-100"><br>
		</div>
		<div class="col-md-4">
        <p><strong>{{$product->productName}}</strong></p>
        <p>{{$product->productPrice}} $</p>
        <hr>
        <form action="{{ url('add-to-cart/'.$product->id) }}" method="post">
        @csrf
          <div class="form-group">
          <input type="hidden"  value="{{$product->id}}" name="product_id">

          <label for="productSize"><strong>SIZE:</strong></label>
         

          <select type="text" class="form-control" name="productSize">
              @foreach($sizes as $size)
              <option value="{{$size->size}}">{{$size->size}}</option>
              @endforeach
              </select>
          </div>    
          <div class="form-group">
              <label for="productQuantity"><strong>QUANTITY:</strong></label>
                <input type="number" min="1" max="10" value="1" name="productQuantity">
          </div> 
          <hr>   
          <p><strong>Details:</strong></p>
          <p>{!!$product->productDetails!!}</p><br>
          <button type="submit" class="btn btn-lg col-md-6 btn-primary">ADD to cart</button>
</form>
</div>
<div class="col-md-1">
    <!-- </div>
            <div>
            @foreach($suggestions as $suggestion)
            <a href="/showproduct/{{ $product->id }}/{{$product->productCategory_id}}"><img src="/storage/{{$suggestion->productImage}}"class="w-100"><br></a>
            @endforeach
            </div>
	</div> -->
</div>
@endsection