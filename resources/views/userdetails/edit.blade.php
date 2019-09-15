@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper col-md-10 offset-1 p-0">
  <div class="card-header">
    Add your shipping details.
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
      <form method="post" action="{{ route('userdetails.update') }}">
          @csrf
          @method('PATCH')

          <div class="form-group">

<div class="row">
  <div class="col-md-12 mb-3">
    <label for="fullName">Full name</label>
    @if (auth()->user())
                <input type="name" class="form-control"  name="name" value="{{ auth()->user()->name }}" readonly>
            @else
                <input type="name" class="form-control"  name="name" value="{{ old('name') }}" required>
            @endif                <div class="invalid-feedback">
      Valid first name is required.
    </div>
  </div>
</div>


@if (auth()->user())

<input type="hidden" value="{{auth()->user()->id}}" name="user_id">
@endif
<div class="mb-3">
  <label for="email">Email <span class="text-muted"></span></label>
  @if (auth()->user())
                <input type="email" class="form-control"  name="email" value="{{ auth()->user()->email }}" readonly>
            @else
                <input type="email" class="form-control"  name="email" value="{{ old('email') }}" required>
            @endif
            <div class="invalid-feedback">
    Please enter a valid email address for shipping updates.
  </div>
</div>

<div class="mb-3">
  <label for="address">Address</label>
  <input type="text" class="form-control" name="shippingAddress" placeholder="1234 Main St" required>
  <div class="invalid-feedback">
    Please enter your shipping address.
  </div>
</div>
<div class="row">
  <div class="col-md-6 mb-3">
    <label for="country">Country</label>
    <input type="text" class="form-control" name="shippingCountry" placeholder="Country" required>

<div class="invalid-feedback">
      Please select a valid country.
    </div>
  </div>
  <div class="col-md-6 mb-3">
    <label for="city">City</label>
    <input type="text" class="form-control" name="shippingCity" placeholder="city" required>

<div class="invalid-feedback">
      Please provide a valid state.
    </div>
  </div>
</div>
<div class="row">
      <div class="col-md-6 mb-3">
        <label for="zip">Zip</label>
        <input type="text" class="form-control" name="shippingZip" placeholder="" required>
        <div class="invalid-feedback">
          Zip code required.
        </div>
      </div>
<div class="col-md-6 mb-3">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="Phone" placeholder="" required>
    <div class="invalid-feedback">
      Phone code required.
    </div>
  </div>
</div>


          

          <button type="submit" class="btn btn-primary">Confirm details</button>
      </form>
  </div>
</div>
@endsection