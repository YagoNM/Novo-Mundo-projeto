@extends('layouts.main')

@section('title', 'Novo Mundo')

@section('content')

<h1>Seja bem vindo!</h1>

@foreach($games as $game)
    <p>{{ $game -> name}}</p>
@endforeach

@endsection