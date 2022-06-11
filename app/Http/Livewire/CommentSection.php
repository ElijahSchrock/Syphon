<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Comment;

class CommentSection extends Component
{
    public Comment $comments;

    public function mount($comments)
    {
        $comments = Comment::query();

        $this->comments = $comments;
    }


    public function render()
    {
        return view('livewire.comment-section',[
            'comments', $this->comments
        ]);
    }
}
