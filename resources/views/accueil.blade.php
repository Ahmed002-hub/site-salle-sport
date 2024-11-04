@extends('base')

@section('title', 'Accueil')

@section('content')
    <h2>Accueil</h2>
    <p>Bienvenue sur le site de notre salle de sport associative.</p>
    <div class="image-accueil">
    <img src="{{ asset('img/pexels-victorfreitas-949131.jpg') }}" alt="imagepoids">
    <img src="{{ asset('img/pexels-victorfreitas-841130.jpg') }}" alt="imagepoids">
    </div>
@endsection
