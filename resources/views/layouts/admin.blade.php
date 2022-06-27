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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @include('partials.header')


        <div class="container-fluid">
            <div class="row">
                <aside class="col-12 col-sm-2 min-vh-100 px-0">
                    <nav class="navbar navbar-expand navbar-dark bg-dark h-100 align-items-start">
                        <ul class="nav navbar-nav flex-column ">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('admin.dashboard')}}">Dashboard </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.comics.index')}}">Comics</a>
                            </li>
                        </ul>
                    </nav>
                </aside>
                <main class="col-12 col-sm-10 py-4">
                    @yield('content')
                </main>
            </div>
        </div>



        @include('partials.footer')
    </div>
</body>

</html>
