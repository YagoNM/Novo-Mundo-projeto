@extends('layouts.main') <!-- Estende o layout principal -->

@section('title', 'Novo Mundo') <!-- Define o título da página -->

@section('content') <!-- Define o conteúdo da seção 'content' -->

<h1>Seja bem vindo!</h1> 

@foreach($games as $game) <!-- Loop que itera sobre a variável $games -->
    <p>{{ $game->name }}</p> <!-- Exibe o nome de cada jogo -->
@endforeach

@endsection
