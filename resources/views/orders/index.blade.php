@extends('layouts.app')
@section('content')

<table class="table table-striped">
    <thead>
        <tr>
        <td>productImage</td>
          <td>productName</td>
          <td>productCategory</td>
        </tr>
    </thead>
    <tbody>
        @foreach($neworders as $neworder)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->productName}}</td>
            <td>{{$product->productCategory_id}}</td>
            <td>{!!$product->productDetails!!}</td>
            <td>{{$product->productPrice}}</td>
            <td>{{$product->productImage}}</td>



        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection