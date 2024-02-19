<!-- welcome.blade.php -->
@extends('layouts/auth')
@section('title', 'Page de présentation')
@section('content')

<!-- Login -->
<div class="background-image">
    <div class="auth-containe">
        <img src="{{ asset('img/logo-site.png') }}" alt="Grappe de raisin-Icône" class="site-logo_welcome">
        <h3>Enrichissez votre collection de vins !</h3>
        <h2>Dégustez l'Inédit</h2>
        <a href="{{ route('login') }}" class="button log">Se connecter</a>
        <!-- enregistrement  -->
        <div class="input_lign">
            <p>Nouveau ici ?</p>
            <a href="{{ route('register') }}" class="cta-link highlight">Créez un compte</a>
        </div>
        <!--contact -->
        <div class="log_mail">
            <a href="mailto:vinexplore@gmail.com" class="cta-link"><img src="/img/icons/mailbox-outline.svg" alt="envoi mail" title="Nous contacter" class="mail-icon">Contactez-nous</a>
        </div>
    </div>
</div>



@if(session('message'))
<h6 class="success-message">
    {{ session('message') }}
</h6>
@endif

@endsection