@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="container-fluid" style="text-align:center;">
    <button  type="button" class="btn btn-primary btn-lg uper"><a href="/" style="text-decoration:none;color:white;">Home</a></button>
    <button  type="button" class="btn btn-primary btn-lg uper"><a href="/admin/" style="text-decoration:none;color:white;">Admin Dashboard</a></button>
    <button  type="button" class="btn btn-primary  btn-lg uper"><a href="/admin/products/create" style="text-decoration:none;color:white;">ADD PRODUCT</a></button>
</div>
<div class="container-fluid"><div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>productName</td>
          <td>productCategory</td>
          <td>productDetails</td>
          <td>productPrice</td>
          <td>productImage</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->productName}}</td>
            <td>{{$product->productCategory_id}}</td>
            <td>{!!$product->productDetails!!}</td>
            <td>{{$product->productPrice}}</td>
            <td>{{$product->productImage}}</td>


            <td><a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('products.destroy', $product->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection