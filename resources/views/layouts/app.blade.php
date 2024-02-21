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

        <!-- <nav id="navbar">
            <a href="" class="{{ request()->is('bouteille*') ? 'active':'' }}">
                <span class="mdi mdi-bottle-wine-outline"></span>
                <p>Bouteilles</p>
            </a>
            <a href="" class="{{ request()->is('cellier*') ? 'active':'' }}">
                <x-svg.cellarIcon />
                <p>Celliers</p>
            </a>
            <a href="" class="{{ request()->is('favoris*') ? 'active':'' }}">
                <x-svg.heartIcon />
                <p>Favoris</p>
            </a>
            <a href="" class="{{ request()->is('achats*') ? 'active':'' }}">
                <x-svg.cartIcon />
                <p>Achats</p>
            </a>
            <a href="" class="{{ request()->is('profil*') ? 'active':'' }}">
                <x-svg.profilIcon />
                <p>Profil</p>
            </a>
        </nav> -->


        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <footer></footer>
    </div>
</body>

</html>

</html>