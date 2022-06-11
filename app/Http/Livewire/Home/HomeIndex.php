<?php

namespace App\Http\Livewire\Home;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use App\Models\Comment;
use App\Models\Categories;
use Livewire\WithPagination;

class HomeIndex extends Component
{
    use WithPagination;

    // public $posts;

    // public function mount(Post $posts)
    // {

    //     $posts = \App\Models\Post::query()
    //     ->orderBy('likes','desc')
    //     ->get();

    //     $this->posts = $posts;
    // }

    // public function getPostsProperty()
    // {
    //     return Post::query()
    //         ->select('id', 'user_id', 'category_id', 'title', 'body', 'featured_image', 'likes', 'dislikes')
    //         ->with('user:id,name,profile_photo_path')
    //         ->orderBy('likes','desc')
    //         ->get();
    // }

    public function render()
    {
        // ray()->showQueries();
        return view('livewire.home.home-index', [
            'posts' => Post::paginate(3),
            'users' => User::get(),
            'categories' => Categories::get(),
        ]);
    }

    public function save()
    {
        ray('clicked like');
        $this->posts->likes = 1;
        $this->posts->save();

    }

    public function paginationView()
    {
        return 'pagination';
    }
}
