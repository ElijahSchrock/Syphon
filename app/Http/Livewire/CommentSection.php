<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Comment;

class CommentSection extends Component
{
    public Post $post;

    public function mount($post)
    {
        $this->post = $post;
    }


    public function render()
    {
        return view('livewire.comment-section',[
            'post', $this->post
        ]);
    }
}
