<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class CurrentRoles extends Component
{
    public User $user;

    public $rolesPermissions = false;

    public function mount(User $user)
    {
        $this->user = $user;

        $roles = $user->getRoleNames();

        $this->roles = $roles;
    }

    public function whichPermissions()
    {
        // $this->rolesPermissions = true;
    }

    public function render()
    {
        return view('livewire.admin.current-roles', [
            'roles' => $this->roles
        ]);
    }

}
