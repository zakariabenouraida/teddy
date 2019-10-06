@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Product
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('products.update',$product->id) }}" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
          <div class="form-group">
              <label for="productName">productName:</label>
              <input type="text" class="form-control" name="productName" value="{{$product->productName}}">
          </div>
          <div class="form-group">
              <label for="productImage">product image:</label>
              <input type="file" name="productImage" value="{{$product->productImage}}">
          </div>
          <div class="form-group">
              <label for="productprice">productPrice:</label>
              <input type="integer" class="form-control" name="productPrice" value="{{$product->productPrice}}">
          </div>
          <div class="productCategory_id">
              <label for="productCategory_id">productCategory:</label>
              <select type="text" class="form-control" name="productCategory_id">
              @foreach($prodcates as $prodcate)
              <option value="{{$prodcate->id}}">{{$prodcate->productCategory}}</option>
              @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="productDetails">productDetails:</label>
              <textarea type="text" class="form-control" name="productDetails" >{{$product->productDetails}}</textarea>
          </div>


          <button type="submit" class="btn btn-primary">update Product</button>
      </form>
  </div>
</div>
@endsection