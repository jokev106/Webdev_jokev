<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gamevendor.id</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="background-color: gainsboro">
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="position: fixed; width: 100%; z-index: 1">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Gamevendor.id
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('partpc.index') }}" onmouseover="this.style.textShadow='0px 0px 15px grey'" onmouseout="this.style.textShadow='0px 0px 0px grey'">Part List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('providerpartpc.index') }}" onmouseover="this.style.textShadow='0px 0px 15px grey'" onmouseout="this.style.textShadow='0px 0px 0px grey'">Provider List</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')

</div>
</body>
</html>
