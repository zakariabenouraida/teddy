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
    <button  type="button" class="btn btn-primary  btn-lg uper"><a href="/admin/sizes/create" style="text-decoration:none;color:white;">ADD SIZE</a></button>
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
          <td>size Name</td>
          <td>role</td>
          <td>size Name</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>
                @foreach($user->roles as $role)
                {{$role->name}}
                @endforeach
            </td>

            <td><a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('users.destroy', $user->id)}}" method="post">
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