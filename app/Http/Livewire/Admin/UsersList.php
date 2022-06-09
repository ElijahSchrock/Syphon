<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component
{
    use WithPagination;
    // public User $users;

    public function getUsersProperty()
    {
        return User::paginate(5);
    }

    public function render()
    {
        return view('livewire.admin.users-list', [
            'users' => $this->users
        ]);
    }
}
