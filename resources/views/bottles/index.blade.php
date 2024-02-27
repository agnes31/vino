@extends('layouts/app')
@section('title', 'Liste des Bouteilles')
@section('content')

<section>
    <h2>Liste des Bouteilles</h2>

    @foreach($bottles as $bottle)
    <div style="display: flex; margin-bottom: 20px;">
        <div>
            @if($bottle->image)
            <img src="{{ $bottle->image }}" alt="{{ $bottle->nom }}" style="max-width: 100px; height: auto;">
            @else
            Pas d'image
            @endif
        </div>
        <div style="flex-grow: 1; margin-left: 20px;">
            <div style="font-weight: bold; margin-bottom: 10px;">{{ $bottle->name }}</div>
            <div>ID: {{ $bottle->id }}</div>
            <div>Code SAQ: {{ $bottle->code_saq }}</div>
            <div>Pays: {{ $bottle->country }}</div>
            <div>Description: {{ $bottle->description }}</div>
            <div>Prix SAQ: {{ $bottle->price }} $</div>
        </div>
    </div>
    @endforeach
    {{ $bottles }}
</section>
@endsection
