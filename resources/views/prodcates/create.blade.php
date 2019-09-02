@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
    <button  type="button" class="btn btn-primary btn-lg uper"><a href="/" style="text-decoration:none;color:white;">Home</a></button>
    <button  type="button" class="btn btn-primary btn-lg uper"><a href="/admin/" style="text-decoration:none;color:white;">Admin Dashboard</a></button>
    <button  class="btn btn-primary btn-lg uper" ><a href="/admin/prod_cates" style="text-decoration:none;color:white;">See all Categories</a></button>
<div class="card uper">
  <div class="card-header">
    Add Category
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
      <form method="post" action="{{ route('prod_cates.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">productCategory Name:</label>
              <input type="text" class="form-control" name="productCategory"/>
          </div>

          <button type="submit" class="btn btn-primary">Create Category</button>
      </form>
  </div>
</div>
@endsection