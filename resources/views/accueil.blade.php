@extends('layout')
@section('title', 'Etudiant')

@section('content')
<ul class="list-group">
    @forelse($etudiants as $etudiant)
        <li class="list-group-item">
            <span class="d-inline-block p-3">{{++$loop->index}}</span>
            <span class="d-inline-block p-3">{{$etudiant->nom}}</span>
            <span class="d-inline-block p-3">{{$etudiant->date_de_naissance}}</span>
            <span class="d-inline-block p-3">{{$etudiant->adresse}}</span>
            <span class="d-inline-block p-3">{{$etudiant->phone}}</span>
            <span class="d-inline-block p-3">{{$etudiant->email}}</span>
            <span class="d-inline-block p-3"><a href="{{route('show', [ $etudiant ])}}">afficher</a></span>
            <span class="d-inline-block p-3"><a href="{{route('edit', [ $etudiant ])}}">modifier</a></span>
        </li>
    @empty
        <li>Aucun étudiant</li>
    @endforelse
</ul>
@endsection('content')


