@extends('layouts.app')
@section('content')

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://js.stripe.com/v3/"></script>
  <style>
    .StripeElement {
      box-sizing: border-box;

      height: 40px;
      width: 500px;
      padding: 10px 12px;

      border: 1px solid transparent;
      border-radius: 4px;
      background-color: white;

      box-shadow: 0 1px 3px 0 #e6ebf1;
      -webkit-transition: box-shadow 150ms ease;
      transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
      box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
      border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
      background-color: #fefde5 !important;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    @if (session()->has('success_message'))
    <div class="spacer"></div>
    <div class="alert alert-success">
      {{ session()->get('success_message') }}
    </div>
    @endif

    @if(count($errors) > 0)
    <div class="spacer"></div>
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{!! $error !!}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>
  <div class="container-fluid">
    <div class="row offset-1">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted"><a href="/cart" style="text-decoration:none;color:grey;">Update cart</a></span>
          <span class="text-muted"><a href="{{ url('/showproduct') }}" style="text-decoration:none;color:grey;">Continue shopping</a></span>
          <span class="text-muted">Your cart</span>
          <span class="badge badge-secondary badge-pill">{{ count((array)session('cart')) }}</span>
        </h4>
        <?php $total = 0 ?>

        @if(session('cart'))
        @foreach(session('cart') as $id => $details)
        <?php $total += $details['price'] * $details['quantity'] ?>

        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div> <img src="/storage/{{ $details['photo'] }}" width="100" height="100" class="img-responsive" /></div>
            <div class="mt-4">
              <h6 class="my-0">{{ $details['name'] }}</h6>
              <small class="text-muted">id:{{ $details['product_id'] }} |</small>

              <small class="text-muted">Size:{{ $details['size'] }} |</small>
              <small class="text-muted">Qty:{{ $details['quantity'] }} |</small>
              <small class="text-muted">Unite price:${{ $details['price'] }}</small>
            </div>
            <span class=" mt-3 text-muted">${{ $details['price'] * $details['quantity'] }}</span>
          </li>
          @endforeach
          @endif

          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>${{ $total }}</strong>
          </li>
        </ul>


      </div>
      <div class="col-md-6 order-md-1">
        <h4 class="mb-3">Shipping Details</h4>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p id="name"><strong>Full Name : </strong>{{auth()->user()->name}}.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p id="country"><strong>Country : </strong>{{auth()->user()->shippingdetail->shippingCountry}}.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" id="city">
              <p id="city"><strong> City : </strong>{{auth()->user()->shippingdetail->shippingCity}}.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" id="address">
              <p id="address"><strong>Address : </strong>{{auth()->user()->shippingdetail->shippingAddress}}.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p id="zip"><strong>Zip : </strong>{{auth()->user()->shippingdetail->shippingZip}}.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p id="phone"><strong>Phone : </strong>{{auth()->user()->shippingdetail->Phone}}.</p>
            </div>
          </div>

        </div>
        <!-- <hr class="mb-4"> -->

        <!-- <h4 class="mb-3">Payment</h4>

<strong>Payment is settled on delivery.</strong> -->
        <hr class="mb-4">
        <form action="{{route ('checkout.store') }}" method="post" id="payment-form">
          @csrf

          <label for="card-element">
            Credit or debit card
          </label>
          <div class="form-row mr-5">
            <br>
            <div id="card-element">
              <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
          </div>

          <br>
          <button class="btn btn-primary btn-lg btn-block" type="submit">Confirm order</button>
          <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
          @if(session('cart'))
          @foreach(session('cart') as $id => $details)
          <input type="hidden" name="product_id" value="{{ $details['product_id'] }}" readonly><br>
          <input type="hidden" name="total" value="{{ $total }}" readonly><br>

          <input type="hidden" name="name" value="{{ $details['name'] }}" readonly><br>

          <input type="hidden" name="size" value="{{ $details['size'] }}" readonly><br>
          <input type="hidden" name="quantity" value="{{ $details['quantity'] }}" readonly><br>
          @endforeach
          @endif

        </form>
      </div>
    </div>
  </div>
  <script>
    var stripe = Stripe('pk_test_28A6EPe1qXUCIVWOXS3xah1e00tBU3lFCZ');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
      base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
          color: '#aab7c4'
        }
      },
      invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
      }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {
      hidePostalCode: true,

      style: style
    });

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
      event.preventDefault();

      var options = {
        name: document.getElementById('name').value,
        country: document.getElementById('country').value,
        city: document.getElementById('city').value,
        address: document.getElementById('address').value,
        zip: document.getElementById('zip').value,
        phone: document.getElementById('phone').value

      }

      stripe.createToken(card, options).then(function(result) {
        if (result.error) {
          // Inform the user if there was an error.
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;
        } else {
          // Send the token to your server.
          stripeTokenHandler(result.token);
        }
      });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);

      // Submit the form
      form.submit();
    }
  </script>
</body>

</html>
@endsection