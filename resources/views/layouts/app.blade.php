<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>@yield('metaTitle', 'DC Comics')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- New version -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/M6Irinel/Framkcss@7afed426c3eb96b21f164839fc10279163084c3c/Framkcss.css">

</head>

<body>
    <div id="app">
        @include('partials.header')
        @yield('main')
        @include('partials.footer')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
