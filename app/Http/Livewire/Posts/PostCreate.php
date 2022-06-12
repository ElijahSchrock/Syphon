<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use App\Models\Categories;
use Illuminate\Validation\Rule;

class PostCreate extends Component
{

    public $post;

    public $new_category = false;

    public $categoryId;

    // public Categories $categories;

    protected $fillable = [
        'title', 
        'body', 
        'category',
        'category_id',
        'description',
        'featured_image'
    ];
    
    protected function rules ()
    {
        return [
            'post.title' => 'required|string',
            'post.body' => 'required|string',
            // 'post.category' => [
            //     'required',
            //     Rule::when(!$this->new_category, 'exists:Categories,id')
            // ]
        ];
    }

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
        return view('livewire.posts.post-create', [
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
        return to_route('posts.index');
    }
}
