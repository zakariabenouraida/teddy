@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Category
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
      <form method="post" action="{{ route('prod_cates.update', $prodcate->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">productCategory Name:</label>
              <input type="text" class="form-control" name="productCategory"/>
          </div>

          <button type="submit" class="btn btn-primary">Update Category</button>
      </form>
  </div>
</div>
@endsection