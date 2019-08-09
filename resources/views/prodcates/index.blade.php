@extends('prodcates.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
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
          <td>category Name</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($prodcates as $prodcate)
        <tr>
            <td>{{$prodcate->id}}</td>
            <td>{{$prodcate->productCategory}}</td>

            <td><a href="{{ route('prod_cates.edit',$prodcate->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('prod_cates.destroy', $prodcate->id)}}" method="post">
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