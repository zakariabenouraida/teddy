@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin: 15px;
  }
</style>
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">Dashboard</div>
                <div class="row justify-content-center">     
                <button  type="button" class="btn btn-primary btn-lg uper col-lg-5" ><a href="/admin/users" style="text-decoration:none;color:white;">See all Users</a></button>
                </div>
                <div class="row justify-content-center">     
                <button  type="button" class="btn btn-primary  btn-lg uper col-lg-5"><a href="/admin/products/create" style="text-decoration:none;color:white;">ADD PRODUCT</a></button>
                <button  type="button" class="btn btn-primary btn-lg uper col-lg-5" ><a href="/admin/products" style="text-decoration:none;color:white;">See all Products</a></button>
                </div>
                <div class="row justify-content-center">
                  <button  type="button" class="btn btn-primary  btn-lg uper col-lg-5"><a href="/admin/prod_cates/create" style="text-decoration:none;color:white;">ADD category</a></button>
                <button  type="button" class="btn btn-primary btn-lg uper col-lg-5" ><a href="/admin/prod_cates" style="text-decoration:none;color:white;">See all Categories</a></button>
                </div>
                <div class="row justify-content-center">
                  <button  type="button" class="btn btn-primary  btn-lg uper col-lg-5"><a href="/admin/sizes/create" style="text-decoration:none;color:white;">ADD SIZE</a></button>
                <button  type="button" class="btn btn-primary btn-lg uper col-lg-5" ><a href="/admin/sizes" style="text-decoration:none;color:white;">See all Sizes</a></button>
                </div>
              </div>

            </div>
        </div>
    </div>
</div>
@endsection