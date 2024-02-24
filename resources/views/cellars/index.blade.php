@extends('layouts/app')
@section('title', 'Mes celliers')
@section('content')


<section class="">
    <h2>Mes celliers</h2>

    <a href="{{route('cellar.create')}}" style="display: flex; align-items: center;">
        <button class="add-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
        <span>Ajouter un cellier</span>
    </a>
</section>
@endsection