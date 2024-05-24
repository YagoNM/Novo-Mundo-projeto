@extends('layouts.main')

@section('title', 'Nossos Jogos')

@section('content')

<h1>Escolha e se divirta!</h1>

    <div class="cards-container">
        <div>1</div>
        <div>2</div>
        <div>3</div>
    </div>

@foreach($games as $game) <!-- Loop que itera sobre a variável $games -->
    <p>{{ $game->name }}</p> <!-- Exibe o nome de cada jogo -->
@endforeach

@endsection