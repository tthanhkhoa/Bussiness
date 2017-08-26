<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> {{isset($thongtin->tenchushop) ? $thongtin->tenchushop : 'Admin'}} | S2B Beauty </title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('css/css2/animate.css')}}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{asset('css/css2/flexslider.css')}}">
    <!-- Icomoon -->
    <link rel="stylesheet" href="{{asset('css/css2/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/css2/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('css/css2/style.css')}}">


    <!-- Modernizr JS -->
    <script src="{{asset('js/js2/modernizr-2.6.2.min.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>

<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> {{isset($thongtin ->sodienthoai)? $thongtin ->sodienthoai : '+84 9999 99999'}}
                                </a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> {{isset($thongtin->email) ? $thongtin->email : 'ceo@s2bbeauty.io'}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('home')}}"><i class="fa ">{{isset($thongtin->tenchushop) ? $thongtin->tenchushop : 'Admin'}}</i></li>
                            <li><a href="{{isset($thongtin->facebook) ? $thongtin->facebook : "#"}}"><i class="fa fa-facebook"></i></a></li>
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
                        <a href="{{ url('home') }}"><img width="80" height="80" src="{{isset($thongtin->logo) ? $thongtin->logo : asset('images/defaut/S2B.jpg')}}" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
                            <li><a href="#"><i class="fa fa-star"></i> Sản phẩm yêu thích</a></li>
                            <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            <li><a href="#"><i class="fa fa-lock"></i> Đăng nhập</a></li>
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
                            <li><a href="{{ url('home') }}" class="active">Trang chủ</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="#">Sản phẩm</a></li>
                                    <li><a href="#">Sản phẩm bán chạy</a></li>
                                    {{--<li><a href="#">Checkout</a></li>--}}
                                    <li><a href="{{ url('cart') }}">Giỏ hàng</a></li>
                                    <li><a href="#">Login</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog - Khuyên dùng<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="#">Chăm sóc da mặt</a></li>
                                    <li><a href="#">Dưỡng da</a></li>
                                </ul>
                            </li>
                            {{--<li><a href="#">404</a></li>--}}
                            <li><a href="{{ url('about') }}">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Tìm sản phẩm"/>
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
                @yield('chitietsanpham')

                <!--features_items-->
            </div>

        </div>
    </div>
</section>

@include('client.compoment.footer')



<script src="{{asset('js/jquery.js')}}"></script>
<!-- jQuery -->
<script src="{{asset('js/js2/jquery.min.js')}}"></script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('js/price-range.js')}}"></script>
<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
{{--<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>--}}
{{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>--}}
{{--<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>--}}


<!-- jQuery Easing -->

<script src="{{asset('js/js2/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/js2/bootstrap.min.js')}}"></script>

<!-- Waypoints -->
<script src="{{asset('js/js2/jquery.waypoints.min.js')}}"></script>
<!-- Stellar Parallax -->
<script src="{{asset('js/js2/jquery.stellar.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('js/js2/jquery.flexslider-min.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('js/js2/main.js')}}"></script>
</body>
</html>