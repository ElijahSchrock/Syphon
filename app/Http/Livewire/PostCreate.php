<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Categories;
use Livewire\Component;

class PostCreate extends Component
{

    public $post;

    protected $fillable = [
        'title', 
        'body', 
        'category',
        'category_id',
        'description',
        'featured_image'
    ];
    
    protected $rules = [
        'post.title' => 'required|string',
        'post.body' => 'required|string|min:500',
        'post.category' => '',
    ];

    public function getPostsProperty()
    {
        return Post::get();
    }

    public function render()
    {
        return view('livewire.Posts.post-create', [
            'posts' => $this->posts,
            'categories' => Categories::get()
        ]);
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = new Post;
        $post->title = $this->title;
        $post->body = $this->body;
        $post->category = $this->category->name;
        $post->category_id = $this->categories->id;
        $post->featured_image = $this->featured_image;
        $post->save();

        $this->reset(['title', 'body', 'categories', 'featured_image']);
    }

}
