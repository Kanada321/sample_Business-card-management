<?php
#echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$path = "http://192.168.11.11:8888/laravel/laravel_bgc/public/";
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="ja" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <!-- link rel="icon" href="./favicon.ico" type="image/x-icon"/ -->
    <!-- link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" / -->
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="{{$path}}js/require.min.js"></script>
    <script>
        requirejs.config({
            baseUrl: '.'
        });
    </script>
    <!-- Dashboard Core -->
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/dashboard.js') }}" ></script>
    <!-- c3.js Charts Plugin -->
    <link href="{{ asset('assets/plugins/charts-c3/plugin.css') }}"rel="stylesheet" />
    <script src="{{ asset('assets/plugins/charts-c3/plugin.js') }}"></script>
    <!-- Google Maps Plugin -->
    <link href="{{ asset('assets/plugins/maps-google/plugin.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/plugins/maps-google/plugin.js') }}"></script>
    <!-- Input Mask Plugin -->
    <script src="{{ asset('assets/plugins/input-mask/plugin.js') }}"></script>
    <link href="{{ asset('css/custom.css?001') }}" rel="stylesheet" />
</head>
<body class="smg_product_registration">
<div class="page">
    <div class="page-main">
        <!-- div class="header py-4">
          <div class="container">
                          </div>
        </div -->
        <!-- header -->
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 ml-auto">
                    </div>
                    <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                            <li class="nav-item">
                                <a href="top" class="nav-link"><i class="fe fe-home"></i> 名刺管理アプリ</a>
                            </li>
                            <li class="nav-item">
                                <a href="bgclist" class="nav-link">　 名刺情報一覧</a>
                            </li>
                            <li class="nav-item">
                                <a href="bgcadd" class="nav-link">　 名刺情報追加</a>
                            </li>
                            <li class="nav-item">
                                <a href="companielist" class="nav-link">　 会社一覧</a>
                            </li>
                            <li class="nav-item">
                                <a href="companiesadd" class="nav-link">　 会社追加</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->

        <!-- contents -->
        <div class="my-3 my-md-5">
            <div class="container">
                <!-- div class="row" -->
                <!-- contents inner -->
                    @yield('content')
                <!--end contents inner -->
                <!-- /div --><!-- row コメントアウト　-->

            </div>
        </div>

        </div>
        <!-- fotter -->

        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                        © 2019 toward-future.net All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>