<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Animate -->
    <link rel="stylesheet" href="css/css2/animate.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="css/css2/flexslider.css">
    <!-- Icomoon -->
    <link rel="stylesheet" href="css/css2/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/css2/bootstrap.css">

    <link rel="stylesheet" href="css/css2/style.css">


    <!-- Modernizr JS -->
    <script src="js/js2/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<audio controls style="display:none;">
  <source src="http://zmp3-mp3-s1-tr.zadn.vn/d5281bd7f3931acd4382/6888216443894428063?key=93fWMYXb-Yh-EFpRTeT1sw&amp;expires=1500866341" type="audio/ogg">
  
Your browser does not support the audio element.
</audio>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{ url('home') }}"><img src="images/home/logo.png" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="#"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="#"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{ url('home') }}" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Product Details</a></li>
                                    <li><a href="#">Checkout</a></li>
                                    <li><a href="{{ url('cart') }}">Cart</a></li>
                                    <li><a href="#">Login</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="#">Blog List</a></li>
                                    <li><a href="#">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="#">404</a></li>
                            <li><a href="{{ url('about') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->


{{--@include('client.compoment.slider')--}}
@yield('slider')
<!--/slider-->

<section>
    <div class="container">
        <div class="row">
            @yield('about')
            @yield('cart')
            <div class="col-sm-3">
                <div class="left-sidebar">
                    @yield('slidebar')
                    {{--@include('client.compoment.slidebar')--}}
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                @yield('home')
                @yield('product')
                @yield('product-details')
                @yield('recommended')

                <!--features_items-->
            </div>

        </div>
    </div>
</section>

@include('client.compoment.footer')



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
<!-- jQuery -->
<script src="js/js2/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/js2/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/js2/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/js2/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="js/js2/jquery.stellar.min.js"></script>
<!-- Flexslider -->
<script src="js/js2/jquery.flexslider-min.js"></script>
<!-- Main JS -->
<script src="js/js2/main.js"></script>
</body>
</html>