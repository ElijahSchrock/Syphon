<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class HomeIndex extends Component
{

    public $id;
    public $category;
    public $title;
    public $excerpt;
    public $body;
    public $published;
    public $featured_image;

    public $editing;

    public function getPostsProperty()
    {
        return Post::get();
    }

    public function render()
    {
        return view('livewire.home.home-index', [ 
            'posts' => $this->posts,
            'users' => User::get()
        ]);

    }
}
