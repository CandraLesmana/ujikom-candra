<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Modernize Free</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('/assets/images/logos/favicon.png') }}" />
        <link rel="stylesheet" href="{{ asset('/assets/css/styles.min.css') }}" />

        <link href="{{ asset('css/templatemo-topic-listing.css') }}" rel="stylesheet">  
    </head>
    <body>

        <div id="root"></div>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('/assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/assets/js/sidebarmenu.js') }}"></script>
        <script src="{{ asset('/assets/js/app.min.js') }}"></script>
        <script src="{{ asset('/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
        <script src="{{ asset('/assets/libs/simplebar/dist/simplebar.js') }}"></script>
        <script src="{{ asset('/assets/js/dashboard.js') }}"></script>

        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/click-scroll.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
