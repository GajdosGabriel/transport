<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
{{--    <script src="{{ asset('js/aos/aos.js') }}" defer></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos/aos.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


        <main>
            <body  data-spy="scroll" data-target="#navbar" data-offset="0">
            @include('layouts.nav')
            @yield('content')
            </body>
        </main>
    </div>

    <script>
        AOS.init({
            offset: 200,
            duration: 400,
            easing: 'ease-in-sine',
            delay: 100,
        });
    </script>
</body>
</html>
