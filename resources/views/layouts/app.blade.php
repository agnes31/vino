<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- Styles -->
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/auth.css" rel="stylesheet">

</head>

<!-- <script src="/js/main.js"></script> -->




<body>
    <div class="">

        <!-- Header -->
        <header>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" style="background: none; border: none;">
                    <img src="{{ asset('img/logo-site.png') }}" alt="Grappe de raisin-Icône" class="site-logo_header">
                </button>
            </form>
            <h2>VinExplore</h2>
            <!-- Nav -->
            <!-- <nav>
                <ul class="">
                    <li><a href="/cellars">Celliers</a></li>
                    <li><a href="/cellars">Celliers</a></li>
                    <li><a href="/cellars">Celliers</a></li>
                    <li><a href="/cellars">Celliers</a></li>
                </ul>
            </nav> -->
        </header>

        <!-- Content -->
        <main>
            @yield('content')
        </main>

        <!-- <footer></footer> -->
    </div>
    <script src="/js/modale.js"></script>
</body>

</html>