<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/landing/css/bootstrap.css') }}" type="text/css" />
            <link rel="stylesheet" href="{{ asset('/landing/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/landing/css/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/landing/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/landing/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/landing/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/landing/css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/landing/css/responsive.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('/css/buttons.dataTables.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('any-cms.project_header') }}</title>

    <style>
        * {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body class="stretched">

<!-- Document Wrapper ============================================= -->
<div id="wrapper" class="clearfix">
    <div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>

    @include('layouts.landing.header')

    <div class="clear"></div>

    <!-- Content ============================================= -->
    @yield('content')

    <!-- Footer ============================================= -->
    @include('layouts.landing.footer')
</div><!-- #wrapper end -->

<!-- Go To Top ============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts ============================================= -->
<link rel="stylesheet" href="{{ asset('/landing/css/responsive.css') }}" type="text/css" />

<script src="{{ asset('/landing/js/jquery.js') }}"></script>
<script src="{{ asset('/landing/js/plugins.js') }}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{ asset('/landing/js/functions.js') }}"></script>

</body>
</html>
