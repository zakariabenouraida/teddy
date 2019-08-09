@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Dashboard</div>

                <button  type="button" class="btn btn-primary  btn-lg uper"><a href="/admin/products/create" style="text-decoration:none;color:white;">ADD PRODUCT</a></button>
                <button  class="btn btn-primary btn-lg uper" ><a href="/admin/products" style="text-decoration:none;color:white;">See all Products</a></button>

                <button  type="button" class="btn btn-primary  btn-lg uper"><a href="/admin/prod_cates/create" style="text-decoration:none;color:white;">ADD category</a></button>
                <button  class="btn btn-primary btn-lg uper" ><a href="/admin/prod_cates" style="text-decoration:none;color:white;">See all Categories</a></button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection