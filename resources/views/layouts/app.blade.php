<!DOCTYPE html>
<html lang="en">

<head>
    <title>  @yield('title',"MKEC")</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet"> --}}

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/flaticon.css">
    {{-- <link rel="stylesheet" href="/css/icomoon.css"> --}}
    <link rel="stylesheet" href="/css/style.css">
    <style>
        @media (min-width: 1200px) {
            .container.nav2 {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>

    <x-header/>

    @yield('body')
    
    <x-footer/>
 



    @yield('javascript')

    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/jquery.animateNumber.min.js"></script>
    <script src="/js/scrollax.min.js"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
    {{-- <script src="/js/google-map.js"></script> --}}
    <script src="/js/main.js"></script>
    
</body>
    
</html>