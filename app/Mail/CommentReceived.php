<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Post;
use App\Comment;


class CommentReceived extends Mailable
{
    use Queueable, SerializesModels;
    public $team;
    public $comment;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Team $team, Comment $comment)   ///a mogli smo i samo comment jer ima foreign key, pa bi bilo $comment->post valjda
    {
        $this->team = $team;
        $this->comment = $comment;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.received', [
            'team' => $this->team, 'comment' => $this->comment
        ]);
    }
}
