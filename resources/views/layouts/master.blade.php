<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BlogFree</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>


<body>
    <div id="app">
        <header class="container py-4 mb-16 mx-auto flex justify-between">
            <a href="{{ route('welcome') }}" class="font-serif text-5xl font-black">BlogFree</a>
            @yield('auth')
        </header>
        
        <section class="px-8">
            @yield ('stuff')
        </section>    
    </div>
</body>


</html>