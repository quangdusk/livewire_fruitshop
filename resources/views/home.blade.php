<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="../css/all.min.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/owl.carousel.css">
        <link rel="stylesheet" href="../css/magnific-popup.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/meanmenu.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/responsive.css">

        @livewireStyles
    </head>
    <body>
        <livewire:pre-loader />
        <livewire:navbar />
        <livewire:search-area />
        <livewire:homepage-slider />
        <livewire:list-section />
        <livewire:product-section />
        <livewire:cart-banner />
        <livewire:testimonail-section />
        <livewire:advertisement-section />
        <livewire:shop-banner />
        <livewire:lastest-news />
        <livewire:logo-carousel />
        <livewire:footer />
        <livewire:copyright />

        @livewireScripts
    </body>
</html>
