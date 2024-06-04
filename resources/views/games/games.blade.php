@extends('layouts.main')

@section('title', 'Nossos Jogos')

@section('content')

<h1 class="head-titleContent">Escolha e se divirta!</h1>

    <div id="cards-container" class="cards-container">
        @foreach($games as $game) <!-- Loop que itera sobre a variável $games -->
            <div class="game-card col-md-3">
                <img src="/img/OIP.jpeg" alt="{{ $game->name }}">
                <div class="card-body">
                    <h5 class="card-name">{{ $game->name }}</h5>
                    <a href="#" class="btn-jogar">Jogar</a>
                </div>
            </div>
        @endforeach

@endsection