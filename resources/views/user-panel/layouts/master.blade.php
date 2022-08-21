<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type='image/x-icon' />

    <link rel="stylesheet" href="{{ asset('css/maicons.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/css/owl.carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

    @stack('headstyles')

    @stack('headScripts')

</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <!-- Header Part -->
        @include('user-panel.layouts.top-header')

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <!-- Navbar Part -->
        @includeIf('user-panel.layouts.navbar')   
        </nav>
    </header>

    @section('content')
    @show

    <div class="page-section banner-home bg-image"
        style="background-image: url({{ asset('img/banner-pattern.svg') }});">
        <!-- Banner Part -->
        @include('user-panel.layouts.banner')
    </div> <!-- .banner-home -->

    <footer class="page-footer">
        <!-- Footer Part -->
        @include('user-panel.layouts.footer')
    </footer>

    @stack('bodystyles')

    @stack('scripts')

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>

    <script src="{{ asset('js/theme.js') }}"></script>

</body>

</html>
