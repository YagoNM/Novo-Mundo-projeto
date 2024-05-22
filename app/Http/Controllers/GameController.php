<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index() {
        return view('welcome');
    }


    public function games() {
        return view('games.games');
    }

}