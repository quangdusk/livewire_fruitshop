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
        <!-- <livewire:pre-loader.pre-loader /> -->
        <livewire:navbar.navbar />
        <livewire:search-area.search-area />
        <livewire:homepage.slider />
        <livewire:homepage.list-section />
        <livewire:homepage.product-section />
        <livewire:homepage.cart-banner />
        <livewire:homepage.testimonail-section />
        <livewire:homepage.advertisement-section />
        <livewire:homepage.shop-banner />
        <livewire:homepage.latest-news />
        <livewire:homepage.logo-carousel />
        <livewire:footer.footer />
        <livewire:copyright.copyright />

        @livewireScripts
    </body>
</html>
