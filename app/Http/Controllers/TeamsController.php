<?php

namespace App\Http\Controllers;

use App\Team;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        // var_dump($teams);
        return view('teams', compact('teams'));
    }

    public function get($id)
    {
        $team = Team::findOrFail($id);

        \Log::info(print_r($team->players->toArray(), true));

        return view('team', compact('team'));
    }
}
