<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food Code Proudly Presents By Themexpert</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- jS -->
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->
@include('components.header')

<!-- LOGO Start
================================================== -->
@include('components.header-logo')

<!-- MENU Start
================================================== -->
@include('components.header-menu')

@yield('content')

<!-- FOOTER Start
================================================== -->
@include('components.footer')

<a id="back-top" href="#"></a>
</body>
</html>
