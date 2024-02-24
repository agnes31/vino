@extends('layouts/app')
@section('title', 'Créer cellier')
@section('content')

<section>
    <!-- Retour -->
    <a href="{{route('cellars.index')}}" class="myReturn">← Retour</a>

    <h2>Créer un cellier</h2>

    <!-- Formulaire cellier -->
    <form method="post">
        @csrf
        <div class="input_contain">
            <input type="text" id="name" name="name" value="{{old('name')}}" required placeholder="{{ __('Nom') }}">
            @if($errors->has('name'))
            <div class="error-message">
                {{$errors->first('name')}}
            </div>
            @endif
        </div>
        <div class="input_contain">
            <textarea name="description" id="description" cols="30" rows="10" placeholder="{{ __('Description') }}">{{old('description')}}</textarea>
            @if($errors->has('description'))
            <div class="error-message">
                {{$errors->first('description')}}
            </div>
            @endif
        </div>
        <input type="submit" class="button log" value="Ajouter">
    </form>

</section>

@endsection