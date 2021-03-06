<?php

namespace App\Http\Controllers;

use App\Team;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Mail\CommentReceived;

class CommentsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('forbidden-comment')->only('store');
    // }

    public function store(Request $request, $team_id)
    {
        $request->validate(
            [
                'content' => 'required | min:10'
                ]
            );
            
            $team = Team::find($team_id);
            
            $comment = Comment::create([
                'content' => $request->get('content'),
                'team_id' => $team->id,
                'user_id' => Auth::user()->id
            ]);

            if ($team->user) {
                \Mail::to($team->user)->send(new CommentReceived( $team, $comment    //jer postoje postovi koji nemaju korisnike
                
            ));
            }
            
            
            return redirect()->back();
            dd('reci');
    }
}
