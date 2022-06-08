<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Categories;

class CategoriesIndex extends Component
{
    public function render()
    {
        $categories = Categories::query()
            ->get();

        return view('livewire.categories.categories-index', ['categories' => $categories]);
    }
}
