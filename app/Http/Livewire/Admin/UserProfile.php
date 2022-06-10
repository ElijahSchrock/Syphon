<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserProfile extends Component
{
    public User $editing;

    protected function rules()
    {
        return [
            'editing.name' => 'required|string',
            'editing.email' => 'required'
        ];
    }

    protected $validationAttributes = [
        'editing.name' => 'name',
        'editing.email' => 'email',
    ];

    public function save()
    {
        $this->validate();

        $this->editing->save();



        $this->emit('saved');
    }
    
    public function render()
    {
        return view('livewire.admin.user-profile');
    }
}
