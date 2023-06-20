<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/all.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/responsive.css')}}">

        @livewireStyles
    </head>
    <body>
        <livewire:pre-loader.pre-loader />
        <livewire:navbar.navbar />
        <livewire:search-area.search-area />
        <livewire:checkout.breadcrumb-section />
        <livewire:checkout.checkout-section />
        <livewire:checkout.logo-carousel />
        <livewire:footer.footer />
        <livewire:copyright.copyright />
        
        <script src="{{ URL::asset('js/jquery-1.11.3.min.js') }}"></script>
        <!-- bootstrap -->
        <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- count down -->
        <script src="{{ URL::asset('js/jquery.countdown.js') }}"></script>
        <!-- isotope -->
        <script src="{{ URL::asset('js/jquery.isotope-3.0.6.min.js') }}"></script>
        <!-- waypoints -->
        <script src="{{ URL::asset('js/waypoints.js') }}"></script>
        <!-- owl carousel -->
        <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
        <!-- magnific popup -->
        <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
        <!-- mean menu -->
        <script src="{{ URL::asset('js/jquery.meanmenu.min.js') }}"></script>
        <!-- sticker js -->
        <script src="{{ URL::asset('js/sticker.js') }}"></script>
        <!-- main js -->
        <script src="{{ URL::asset('js/main.js') }}"></script>
        @livewireScripts
    </body>
</html>
