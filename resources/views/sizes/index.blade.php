@extends('sizes.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
    <button  type="button" class="btn btn-primary btn-lg uper"><a href="/" style="text-decoration:none;color:white;">Home</a></button>
    <button  type="button" class="btn btn-primary btn-lg uper"><a href="/admin/" style="text-decoration:none;color:white;">Admin Dashboard</a></button>
    <button  type="button" class="btn btn-primary btn-lg uper"><a href="/admin/sizes/create" style="text-decoration:none;color:white;">ADD Size</a></button>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>size Name</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($sizes as $size)
        <tr>
            <td>{{$size->id}}</td>
            <td>{{$size->size}}</td>

            <td><a href="{{ route('sizes.edit',$size->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('sizes.destroy', $size->id)}}" method="post">
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