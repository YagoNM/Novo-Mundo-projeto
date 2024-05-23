<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    // Função para lidar com a rota inicial do aplicativo.
    public function index() {

        // Recupera todos os registros da tabela 'games' usando o modelo 'Game'
        $games = Game::all();

        // Retorna a visão 'welcome', passando os dados dos jogos recuperados.
        return view('welcome', ['games' => $games]);
    }

    // Função para lidar com uma rota específica para exibir informações sobre jogos.
    public function games() {
        // Retorna a visão 'games.games'.
        return view('games.games');
    }

}