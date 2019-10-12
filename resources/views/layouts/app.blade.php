<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TeddyFresh') }}</title>

    <!-- Scripts -->
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/b3bd1b8484.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <style>
        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -60px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }

        .fadein {
            margin-top: 25px;
            font-size: 21px;
            text-align: center;
            animation: fadein 2s;
            -moz-animation: fadein 2s;
            /* Firefox */
            -webkit-animation: fadein 2s;
            /* Safari and Chrome */
            -o-animation: fadein 2s;
            /* Opera */
        }

        @keyframes fadein {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-moz-keyframes fadein {

            /* Firefox */
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes fadein {

            /* Safari and Chrome */
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-o-keyframes fadein {

            /* Opera */
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .topnav {
            margin-top: -40px;
            background-color: #F1EDE7;
            overflow: hidden;
            text-align: center;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        @media only screen and (max-width: 600px) {
            .topnav {
                text-align: center;
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-around;
            }
        }

        /* Style the links inside the navigation bar */
        .topnav a {
            /* margin-left:150px; */
            float: left;
            color: #000000;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Add a color to the active/current link */
        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        #containera {
            min-height: 100%;
            position: relative;
        }

        #header {
            /* background:#ff0; */
            padding: 10px;
        }

        #body {
            padding: 10px;
            padding-bottom: 60px;
        }

        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
        }

        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: black;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        html {
            scroll-behavior: smooth;
        }

        #myBtn:hover {
            background-color: #555;
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Fascinate&display=swap');
    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    @yield('checkout')
</head>
<div id="containera">

    <body style="padding-top:50px;">
        <!-- <div class="preloader">
    <div class="preloader-spinner">
      <div class="loader-content">
        <img src="https://media0.giphy.com/media/10pPSOEe55e8Sc/200w.webp?cid=790b7611f4e321a1ffb61150de33ba5b43fe3f424d7fc722&rid=200w.webp" alt="JSOFT">
      </div>
    </div>
  </div> -->
        <div id="header"></div>
        <div id="app">
            <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm">
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
                            @if(Auth::user()->hasRole('admin'))
                            <a class="btn btn-primary btn-lg" href="/admin">Admin Dashboard</a>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                            <li class="nav-item">
                                <a href="/cart">
                                    <button type="button" class="btn btn-xs" style="background-color:#F1EDE7;text-decoration:none;color:black;">
                                        <i class="fa fa-shopping-cart"></i> Cart <span class="badge badge-pill badge-dark">{{ count((array)session('cart')) }}</span>
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- <a href="#" class="btn btn-xs"style="background-color:#F1EDE7;text-decoration:none;color:black;"><i class="fas fa-shopping-cart"></i>  0</a>   -->
                </div>
            </nav>
        </div>

        <main class="py-4 ">
            @yield('content')
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        </main>
</div>
<div id="footer"></div>
<footer>
    <div class="container-fluid" style="width:100%">
        <div class="row mt-3 mb-3 d-flex justify-content-center" style="text-align:center;">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" id="brandpos">
                <a class="navbar-brand" href="{{ url('/') }}" style="margin-left:10px;text-align:center;">
                    {{ config('app.name', 'ShopSmart') }}
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <h5>MENU</h5>
                <ul>
                    <li><a style="text-decoration:none;color:black;" href="/showcategory/1">Hoodies</a></li>
                    <li><a style="text-decoration:none;color:black;" href="/showcategory/2">Sweaters</a></li>
                    <li><a style="text-decoration:none;color:black;" href="/showcategory/3">SHIRTS</a></li>
                    <li><a style="text-decoration:none;color:black;" href="/showcategory/4">Pants</a></li>
                    <li><a style="text-decoration:none;color:black;" href="/showcategory/5">Accessories</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <h5>YOUR ACCOUNT</h5>
                <ul>
                    <li><a style="text-decoration:none;color:black;" href="{{ route('shippingdetails.create')}}">Shipping Details</a></li>
                    <!-- <li>BILLING</li> -->
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <h5>HELP</h5>
                <ul>
                    <li>FAQ & SHIPPING/RETURNS</li>
                    <li>PRIVACY POLICY</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <h5>NEWSLETTER</h5>
                <form>
                    <input type="mail" class="form-control">
                    <button style="margin-top:5px;" type="button" class="btn btn-success">SUBSCRIBE</button>
                </form>

            </div>
            <div class="col-xs-11 col-sm-12 col-md-2 col-lg-2  mt-2">
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
        <div class="copyright">&copy; 2019 <a href="/" title=" " style="color:black;">{{ config('app.name', 'ShopSmart') }}</a></div>
    </div>
</footer>
</div>
@yield('scripts')
<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>


<script src="{{ asset('js/app.js') }}"></script>

</body>


</html>