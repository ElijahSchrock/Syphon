<?php

namespace App\Http\Livewire\Categories;

use App\Models\Categories;
use Livewire\Component;

class NewCategory extends Component
{
    public $category;

    protected function rules()
    {
        return [
            'category.name' => 'required|string'
        ];
    }

    protected $validationAttributes = [
        'category.name' => 'category'
    ];

    public function getCategoriesProperty()
    {
        return Categories::get();
    }


    public function save()
    {
        $this->validate();

        $categories = new Categories;
        $categories->name = $this->category['name'];

        $categories->save();

        return to_route('categories.index');
    }
        
    public function render()
    {
        return view('livewire.categories.new-category');
    }

    public function onCancel()
    {
        return to_route('categories.index');
    }
}
