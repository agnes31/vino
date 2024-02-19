@extends('layouts/auth')
@section('title', 'Page mot de passe oublié')
@section('content')
@csrf

<div class="background-auth">
    <img src="{{ asset('img/logo-site.png') }}" alt="Grappe de raisin-Icône" class="site-logo_auth">
    <form action="{{ route('password.email') }}" method="post" class="form_container">
        @csrf
        <h3>Mot de passe oublié</h3>
        <div class="card-body">
            @if(! $errors->isEmpty())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="input_contain">
                <input type="email" id="username" name="email" class="form-control" value="{{ old('email')}}" placeholder="{{ __('Courriel') }}">
                @if($errors->has('email'))
                <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
            </div>
        </div>
        <!-- <div class="card-footer text-center">
            <input type="submit" value="Reset" class="btn btn-success">
        </div> -->
        <x-primary-button class="button log">
            {{ __('Réinitialiser') }}
        </x-primary-button>
    </form>
</div>
<!-- </div>
    </div>
</div> -->
@endsection