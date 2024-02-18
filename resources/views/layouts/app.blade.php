<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <!-- <link href="/css/main.css" rel="stylesheet">
    <link href="/css/components/navBar.css" rel="stylesheet"> -->

</head>

</head>


<body>
    <div class="container">

        <!-- Nav haut -->
        <header>
            <h1>VinExplore</h1>
        </header>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">{{ __('Déconnexion') }}</button>
        </form>

        <!-- Nav Bar -->


        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <footer></footer>
    </div>
</body>

</html>

</html>