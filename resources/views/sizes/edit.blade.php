@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Size
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
      <form method="post" action="{{ route('sizes.update', $size->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="size">size Name:</label>
              <input type="text" class="form-control" name="size"/>
          </div>

          <button type="submit" class="btn btn-primary">Update Book</button>
      </form>
  </div>
</div>
@endsection