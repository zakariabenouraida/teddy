<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TeddyFresh') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/b3bd1b8484.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
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
   padding-bottom:60px;   /* Height of the footer */
}
#footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;   /* Height of the footer */
   /* background:#6cf; */
}</style>
    <style>
@import url('https://fonts.googleapis.com/css?family=Fascinate&display=swap');
</style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
</head>
<div id="containera">

<body style="padding-top:50px;">
<div id="header"></div>
    <div id="app" >
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm" >
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}" style="font-family: 'Fascinate', cursive;">
                    {{ config('app.name', 'ShopSmart') }}
                <button  type="button" class="btn btn-primary btn-lg"><a href="/products/create" style="text-decoration:none;color:white;">ADD PRODUCT</a></button>
                <button  type="button" class="btn btn-primary btn-lg"><a href="/prod_cates/create" style="text-decoration:none;color:white;">ADD category</a></button>

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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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
                    </ul>
                </div>
            </div>
        </nav>
</div>
        <main class="py-4">
            @yield('content')
        </main>
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
                </ul>
            </div>
        </div>
        </div>
        <hr>
        <div class="footer-copyright  small-12 medium-12 large-12 xlarge-12 xxlarge-12 xxxlarge-12">
          <div class="copyright" >&copy; 2019 <a href="/" title=""style="color:black;">{{ config('app.name', 'ShopSmart') }}</a></div> 
        </div>
    </footer>
</div>
</body>
</div>

</html>
