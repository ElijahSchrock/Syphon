<?php

namespace App\Http\Livewire\Categories;

use App\Models\Post;
use Livewire\Component;
use App\Models\Categories;

class CategoriesShow extends Component
{

    public function getPostsProperty()
    {
        return Post::query()
        ->with('categories:id,name')
        ->get();
    }

    public function render()
    {
        return view('livewire.categories.categories-show',[
            'posts' => $this->posts,
            'categories' => Categories::get()
        ]);
    }
}
