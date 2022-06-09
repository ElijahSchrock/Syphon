<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserView extends Component
{
    public User $user;
    
    public function render()
    {
        return view('livewire.admin.user-view');
    }
}
