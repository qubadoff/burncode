<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')

    <title>
        @yield('pageTitle')
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/assets/img/favicon.png">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/keyframe-animation.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/odometer.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/swiper.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/venobox.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/animated-text.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/common-style.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/main.css">
</head>

<body>
<div class="site-preloader">
    <div class="spinner"></div>
</div>

@include('Front.Layouts.inc.header')

@include('Front.Layouts.inc.home-sidebar')

@yield('content')

@include('Front.Layouts.inc.footer')

<div id="scrollup" style="position: fixed; bottom: 20px; left: 20px;">
    <button id="scroll-top" class="scroll-to-top">
        <i class="las la-arrow-up"></i>
    </button>
</div>



{!! siteInfo()->footer_js_code !!}
<script src="{{ url('/') }}/assets/js/vendor/jquary-3.6.0.min.js"></script>
<script src="{{ url('/') }}/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="{{ url('/') }}/assets/js/vendor/atropos.min.js"></script>
<script src="{{ url('/') }}/assets/js/vendor/bootstrap.min.js"></script>
<script src="{{ url('/') }}/assets/js/vendor/popper.min.js"></script>
<script src="{{ url('/') }}/assets/js/vendor/odometer.min.js"></script>
<script src="{{ url('/') }}/assets/js/vendor/waypoints.min.js"></script>
<script src="{{ url('/') }}/assets/js/vendor/venobox.min.js"></script>
<script src="{{ url('/') }}/assets/js/vendor/swiper.min.js"></script>
<script src="{{ url('/') }}/assets/js/vendor/smooth-scroll.js"></script>
<script src="{{ url('/') }}/assets/js/vendor/wow.min.js"></script>
<script src="{{ url('/') }}/assets/js/vendor/animated-text.min.js"></script>
<script src="{{ url('/') }}/assets/js/vendor/gsap.min.js"></script>
<script src="{{ url('/') }}/assets/js/vendor/scroll-trigger.min.js"></script>
<script src="{{ url('/') }}/assets/js/vendor/parallax-scroll.min.js"></script>
<script src="{{ url('/') }}/assets/js/mailchimp.js"></script>
<script src="{{ url('/') }}/assets/js/main.js"></script>
</body>
</html>
