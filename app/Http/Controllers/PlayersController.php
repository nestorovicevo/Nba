<?php

namespace App\Http\Controllers;

use App\Player;

class PlayersController extends Controller
{
    public function get($id)
    {
        $player = Player::findOrFail($id);

        return view('player', compact('player'));
    }
}
