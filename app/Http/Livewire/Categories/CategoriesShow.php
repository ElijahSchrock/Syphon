<?php

namespace App\Http\Livewire\Categories;

use App\Models\Post;
use Livewire\Component;
use App\Models\Categories;

class CategoriesShow extends Component
{

    public Categories $category;

    public function mount(Categories $category)
    {
        $this->category = $category;

        $posts = \App\Models\Post::query()
        ->where('category_id',$category->id)
        ->get();

        $this->posts = $posts;
    }

    public function render()
    {
        return view('livewire.categories.categories-show', ['category' => $this->category, 'posts' => $this->posts]);
    }
}
