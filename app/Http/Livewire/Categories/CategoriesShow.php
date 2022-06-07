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
            ->select('id', 'user_id', 'category_id', 'title', 'body', 'featured_image')
            ->with('categories:id,name')
            // ->with('categories:id',$this->category_id)
            ->get();
    }

    // public function render()
    // {
    //     ray()->showQueries();
    //     return view('livewire.categories.categories-show', [
    //         'posts' => $this->posts,
    //         'categories' => Categories::get(),
    //     ]);
    // }

    public function render(Categories $category)
    {
        $posts = \App\Models\Post::query()
        ->where('category_id',$category->id)
        ->get();

        return view('livewire.categories.categories-show', ['category' => $category, 'posts' => $posts]);
    }
}
