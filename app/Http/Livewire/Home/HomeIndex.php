<?php

namespace App\Http\Livewire\Home;

use App\Models\Categories;
use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class HomeIndex extends Component
{

    public function getPostsProperty()
    {
        return Post::query()
            ->select('id', 'user_id', 'category_id', 'title', 'body', 'featured_image')
            ->with('user:id,name,profile_photo_path')
            ->get();
    }

    public function render()
    {
        ray()->showQueries();
        return view('livewire.home.home-index', [
            'posts' => $this->posts,
            'users' => User::get(),
            'categories' => Categories::get(),
        ]);
    }
}
