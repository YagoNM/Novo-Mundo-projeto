@extends('layouts.main')

@section('title', 'Nossos Jogos')

@section('content')

<h1>Escolha e se divirta!</h1>

@foreach($games as $game) <!-- Loop que itera sobre a variável $games -->
    <p>{{ $game->name }}</p> <!-- Exibe o nome de cada jogo -->
@endforeach

@endsection