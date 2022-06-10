<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Categories;
use Livewire\WithPagination;

class CategoriesIndex extends Component
{
    use WithPagination;

    public function getCategoriesProperty()
    {
        return Categories::paginate(5);
    }

    public function render()
    {
        return view('livewire.categories.categories-index', ['categories' => $this->categories]);
    }

    public function newCategory()
    {
        return view('livewire.categories.new-category');
    }
}
