@extends('layouts.main')

@section('title', 'Nossos Jogos')

@section('content')

<h1 class="head-titleContent">Escolha e se divirta!</h1>

    <div class="cards-container">
        <div class="game-card">
            1
        </div>
        <div class="game-card">
            2
        </div>
        <div class="game-card">
            3
        </div>
        <div class="game-card">
            4
        </div>
        <div class="game-card">
            5
        </div>
        <div class="game-card">
            6
        </div>
        <div class="game-card">
            7
        </div>
        <div class="game-card">
            8
        </div>
    </div>

@foreach($games as $game) <!-- Loop que itera sobre a variável $games -->
    <p>{{ $game->name }}</p> <!-- Exibe o nome de cada jogo -->
@endforeach

@endsection