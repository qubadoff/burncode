<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ siteInfo()->description }}">
    <meta name="keywords" content="{{ siteInfo()->name }}">
    <meta name="author" content="{{ siteInfo()->name }}">
    <!-- Page Title -->
    <title>
        @yield('title')
    </title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}assets2/images/favicon.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('/') }}assets2/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset('/') }}assets2/css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets2/css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset('/') }}assets2/css/all.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset('/') }}assets2/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('/') }}assets2/css/magnific-popup.css">
    <!-- Main Custom Css -->
    <link href="{{ asset('/') }}assets2/css/custom.css" rel="stylesheet" media="screen">
</head>
<body class="tt-magic-cursor">

<!-- Preloader Start -->
<div class="preloader">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon"><img src="{{ asset('/') }}assets2/oval.svg" alt=""></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Magic Cursor Start -->
<div id="magic-cursor">
    <div id="ball"></div>
</div>
<!-- Magic Cursor End -->

@include('Frontend.layouts.includes.header')

@yield('content')

@include('Frontend.layouts.includes.footer')

<!-- Jquery Library File -->
<script src="{{ asset('/') }}assets2/js/jquery-3.7.1.min.js"></script>
<!-- Bootstrap js file -->
<script src="{{ asset('/') }}assets2/js/bootstrap.min.js"></script>
<!-- Validator js file -->
<script src="{{ asset('/') }}assets2/js/validator.min.js"></script>
<!-- SlickNav js file -->
<script src="{{ asset('/') }}assets2/js/jquery.slicknav.js"></script>
<!-- Swiper js file -->
<script src="{{ asset('/') }}assets2/js/swiper-bundle.min.js"></script>
<!-- Counter js file -->
<script src="{{ asset('/') }}assets2/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('/') }}assets2/js/jquery.counterup.min.js"></script>
<!-- Isotop js file -->
<script src="{{ asset('/') }}assets2/js/isotope.min.js"></script>
<!-- Magnific js file -->
<script src="{{ asset('/') }}assets2/js/jquery.magnific-popup.min.js"></script>
<!-- SmoothScroll -->
<script src="{{ asset('/') }}assets2/js/SmoothScroll.js"></script>
<!-- MagicCursor js file -->
<script src="{{ asset('/') }}assets2/js/gsap.min.js"></script>
<script src="{{ asset('/') }}assets2/js/magiccursor.js"></script>
<!-- Text Effect js file -->
<script src="{{ asset('/') }}assets2/js/SplitText.js"></script>
<script src="{{ asset('/') }}assets2/js/ScrollTrigger.min.js"></script>
<!-- Wow js file -->
<script src="{{ asset('/') }}assets2/js/wow.js"></script>
<!-- Main Custom js file -->
<script src="{{ asset('/') }}assets2/js/function.js"></script>
</body>
</html>
