<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--Scrpts-->

    <script src="{{ asset('assetss/assets/node_modules/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ asset('assetss/assets/node_modules/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assetss/assets/node_modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assetss/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('assetss/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assetss/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assetss/js/custom.min.js') }}"></script>

    <script src="{{ asset('assetss/assets/node_modules/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('assetss/assets/node_modules/morrisjs/morris.min.js') }}"></script>
    <!--c3 JavaScript -->
    <script src="{{ asset('assetss/assets/node_modules/d3/d3.min.js') }}"></script>
    <script src="{{ asset('assetss/assets/node_modules/c3-master/c3.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('assetss/js/dashboard1.js') }}"></script>

    <!--Styles-->

    <link href="{{ asset('assetss/assets/node_modules/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetss/assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{ asset('assetss/assets/node_modules/morrisjs/morris.css') }}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{ asset('assetss/assets/node_modules/c3-master/c3.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assetss/css/style.css') }}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('assetss/css/pages/dashboard1.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('assetss/css/colors/default.css') }}" id="theme" rel="stylesheet">

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
      window.onload = function () {

          tinymce.init({
              selector: '#tinymce',
              height: 200,
              plugins: 'image',
              toolbar: 'bold italic underline | image',
              branding: false,
              file_browser_callback: filemanager.tinyMceCallback
          });

      };
  </script>

@FilemanagerScript
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div id="app">

        @include('partials.sidemenu')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
