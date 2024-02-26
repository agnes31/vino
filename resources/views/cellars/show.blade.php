@extends('layouts/app')
@section('title', 'Détail cellier')
@section('content')


<!-- 
<link href="{{ asset('css/components/cardBouteilleCellier.css') }}" rel="stylesheet">
<link href="{{ asset('css/components/modale.css') }}" rel="stylesheet"> -->


<!-- Modal -->
<!-- <div class="modal" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Avertissement : Cette action est irréversible !</h1>
                <button type="button" class="close-button">Close</button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cet étudiant ?<br>{{$cellar->name}}
            </div>
            <div class="modal-footer">
                <button type="button" class="cancel-button">Annuler</button>

                <form method="post">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="delete" class="delete-button">
                </form>
            </div>
        </div>
    </div>
</div> -->



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
            <!-- <a href="#" id="modaleTrigger" class="red">Supprimer le cellier</a> -->
            <!-- <button type="button" class="red" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button> -->
            <a href="" id="openModal" class="red">Supprimer</a>
        </div>
    </div>

    <!-- Le modal -->
    <div id="myModal" class="modal" style="display:none">
        <!-- Contenu du modal -->
        <div class="modal-content">
            <span id="closeModal">&times;</span>
            <p>Êtes-vous sûr de vouloir supprimer ?</p>
        </div>
    </div>








    <!-- Détail bouteilles -->
    <!-- <div id='modaleContent' class="cards-container">Récupération de l'inventaire...</div> -->

</section>

<!-- Modal confirmation suppression-->

<!-- 
<div class="modale" id="modaleSupp" tabindex="-1" aria-labelledby="ModaleSupp" aria-hidden="true">
    <div class="modale-content modale-small">
        <h3>Voulez-vous vraiment supprimer votre cellier ?</h3>
        <div class="modaleCTA">
            <button class="" id="closeModale">Non</button> -->

<!-- Form -->

<!-- <form method="post">
                @method('DELETE')
                @csrf
                <input type="submit" value="Supprimer" class="button danger">
            </form>
        </div>
    </div>
</div> -->

@endsection