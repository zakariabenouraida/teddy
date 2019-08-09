@extends('products.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Book
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
      <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="productName">productName:</label>
              <input type="text" class="form-control" name="productName"/>
          </div>
          <div class="form-group">
              <label for="productImage">product image:</label>
              <input type="file" name="productImage"/>
          </div>
          <div class="form-group">
              <label for="productprice">productPrice:</label>
              <input type="integer" class="form-control" name="productPrice"/>
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
              <textarea type="text" class="form-control" name="productDetails"></textarea>
          </div>


          <button type="submit" class="btn btn-primary">Create Product</button>
      </form>
  </div>
</div>
@endsection