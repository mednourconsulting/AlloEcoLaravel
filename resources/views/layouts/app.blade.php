<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->

   <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css')}}">
   <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
   <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
   <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

   <!-- MAIN CSS -->
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!-- Scripts -->


</head>
<body>
    <div class="site-wrap" id="app">

        @include('partials.menuUser')
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-md-offset-6"  >
              @include('partials.flash')
            </div>
          </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
