<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function __construct()
    {
        
    }

    public function index() {
        return view('game.index');
    }
}
