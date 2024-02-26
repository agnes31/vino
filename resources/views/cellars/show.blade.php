@extends('layouts/app')
@section('title', 'Détail cellier')
@section('content')

<link href="{{ asset('css/components/modale.css') }}" rel="stylesheet">

<section>
    <!-- Retour -->
    <a href="{{route('cellars.index')}}" class="myReturn">← Retour</a>

    <h2>Mon cellier</h2>

    <!-- Détail cellier -->
    <div class="wineCellar__detail">
        <h2>{{ ucfirst($cellar->name) }}</h2>
        <p>{{ ucfirst($cellar->description ?? '') }}</p>

        <div class="wineCellar__action">
            <a href="{{route('cellar.edit', $cellar->id)}}" class="blue">Mise à jour</a>
            <a href="" id="openModal" class="red">Supprimer</a>
        </div>
    </div>

    <!-- Le modal -->
    <div id="modalOverlay" class="modal-overlay"></div>
    <div id="myModal" class="modal" style="display:none">
        <!-- Contenu du modal -->
        <div class="modal-content">
            <span id="closeModal">&times;</span>
            <p>Êtes-vous sûr de vouloir supprimer ?</p>

            <!-- Form -->
            <form method="post">
                @method('DELETE')
                @csrf
                <button class="grey" id="closeModale">Annuler</button>
                <input type="submit" value="Oui, supprimer" class="red">
            </form>
        </div>
    </div>
</section>
@endsection