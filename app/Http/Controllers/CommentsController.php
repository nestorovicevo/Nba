<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Comment;

class CommentsController extends Controller
{
    public function store($teamId)
    {
        $post = Team::find($teamId);

        $this->validate(request(), Comment::STORE_RULES);

        $post->comments()->create(request()->all());

        return redirect()->route('single-team', ['id' => $teamId]);
    }
}
