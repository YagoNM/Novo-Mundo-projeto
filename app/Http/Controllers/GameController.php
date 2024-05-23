<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    // Função para lidar com a rota inicial do aplicativo.
    public function index() {

        // Retorna a visão 'welcome'.
        return view('welcome', );
    }

    // Função para lidar com uma rota específica para exibir informações sobre jogos.
    public function games() {

        // Recupera todos os registros da tabela 'games' usando o modelo 'Game'
        $games = Game::all();
    
        // Retorna a visão 'games.games', passando os dados dos jogos recuperados.
        return view('games.games', ['games' => $games]);
    }

}