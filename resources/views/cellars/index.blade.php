@extends('layouts/app')
@section('title', 'Mes celliers')
@section('content')



<section class="">
    <h2>Mes celliers</h2>

    <div class="cellar-list">
        @forelse($cellars as $cellar)








        <!-- <a href="{{route('cellar.show', $cellar->id)}}" class="cellar-card">
            <h3>{{$cellar->name}}</h3>
            <p>{{$cellar->description}}</p>
        </a> -->
        <table class="table table-striped cellar-card">
            <tbody>
                <tr>
                    <td>
                        <a href="{{route('cellar.show', $cellar->id)}}">
                            <span class="mdi mdi-bottle-wine-outline"></span>
                            <h3>{{$cellar->name}}</h3>
                        </a>
                    </td>
                    <td>
                        <p>{{$cellar->description}}</p>
                    </td>
                </tr>
            </tbody>
        </table>
        @empty
        <p> <span class="mdi mdi-exclamation-thick"></span> Aucun cellier n'a été créé pour le moment.</p>
        @endforelse

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