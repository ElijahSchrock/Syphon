<?php

namespace App\Http\Livewire\Posts;

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
        'post.body' => 'required|string|max:500',
        'post.category' => 'required',
    ];

    protected $validationAttributes = [
        'post.title' => 'title',
        'post.body' => 'body',
        'post.category' => 'category'
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
        $this->validate(); //validation havin an error
        ray('Hello Save');

        $post = new Post;
        $post->user_id = auth()->user()->id;
        $post->title = $this->post['title'];
        $post->body = $this->post['body'];
        $post->category_id = $this->post['category'];
        // $post->featured_image = $this->featured_image;
        $post->save();

        return to_route('posts.index');
    }

    public function onCancel()
    {
        ray('Hello OnCancel');
        return url()->previous();
    }

}
