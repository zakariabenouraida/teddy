<!DOCTYPE html>
<html>
<head>
 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
    <title>@yield('title')</title>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b3bd1b8484.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
    html,
body {
   margin:0;
   padding:0;
   height:100%;
}
#containera {
   min-height:100%;
   position:relative;
}
#header {
   /* background:#ff0; */
   padding:10px;
}
#body {
   padding:10px;
   padding-bottom:60px;   
}
#footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;   
}</style>
    <style>
@import url('https://fonts.googleapis.com/css?family=Fascinate&display=swap');
</style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

</head>
<body>
<div id="containera">

<body style="padding-top:50px;">
<div id="header"></div>
    <div id="app" >
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm" >
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}" style="font-family: 'Fascinate', cursive;">
                    {{ config('app.name', 'ShopSmart') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <a class="navbar-brand d-flex align-items-center" href="/profile/{{auth()->user()->id}}">
                                <div ><img src="/svg/user-solid.svg" style="height:25px"class="pl-3"></div>
                            </a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                        @endguest
                        <!-- <a href="#" class="btn btn-xs"style="background-color:#F1EDE7;text-decoration:none;color:black;"><i class="fas fa-shopping-cart"></i>  0</a>   -->
                    </ul>
                </div>
            </div>
            <button type="button" class="btn btn-xs"style="background-color:#F1EDE7;text-decoration:none;color:black;" >
        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-dark">{{ count((array)session('cart')) }}</span>
    </button>
        </nav>
</div>
<div class="container">
 
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                <!-- <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array)session('cart')) }}</span>
                </button> -->
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array)session('cart')) }}</span>
                        </div>
 
                        <?php $total = 0 ?>
                        @foreach(session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach
 
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>
 
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ $details['photo'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
<div class="container page">
    @yield('content')
</div>
<div id="footer"></div>
    <footer>
        <div class="container-fluid ">
        <div class="row mt-3 mb-3 d-flex justify-content-center ">
            <div class="col-2"id="brandpos">
                <a class="navbar-brand"  href="{{ url('/') }}" style="margin-left:10px;text-align:center;">
                    {{ config('app.name', 'ShopSmart') }}
                </a>
            </div>
            <div class="col-2">
                <h5>MENU</h5>
                <ul>
                    <li>HOODIES</li>
                    <li>SWEATERS</li>
                    <li>T-SHIRTS</li>
                    <li>PANTS</li>
                    <li>ACCESSORIES</li>
                </ul>
            </div>
            <div class="col-2"> 
                <h5>YOUR ACCOUNT</h5>  
                <ul>
                    <li>SETTINGS</li>
                    <li>BILLING</li>
                </ul>
            </div> 
            <div class="col-2"> 
                <h5>HELP</h5>  
                <ul>
                    <li>FAQ & SHIPPING/RETURNS</li>
                    <li>PRIVACY POLICY</li>
                </ul>
            </div> 
            <div class="col-2">
            <h5>NEWSLETTER</h5>
                <form >
                    <input type="mail" class="form-control">
                    <button style="margin-top:5px;" type="button" class="btn btn-success" >SUBSCRIBE</button>
                </form>

            </div> 
            <div class="col-1  offset-1">
            <h5>FIND US</h5>
                <ul id="social">
                    <li><i class="fab fa-twitter fa-2x"></i></li>
                    <li><i class="fab fa-instagram fa-2x"></i></li>
                    <li><i class="fab fa-facebook fa-2x"></i></li>
                    <li><i class="fab fa-pinterest fa-2x"></i></li>
                </ul>
            </div>
        </div>
        </div>
        <hr>
        <div class="footer-copyright  small-12 medium-12 large-12 xlarge-12 xxlarge-12 xxxlarge-12">
          <div class="copyright" >&copy; 2019 <a href="/" title=" " style="color:black;">{{ config('app.name', 'ShopSmart') }}</a></div> 
        </div>
    </footer>
</div>
@yield('scripts')
 
</body>
</html>