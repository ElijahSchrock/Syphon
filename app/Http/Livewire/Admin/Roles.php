<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Roles extends Component
{
    public User $user;

    public $showingAssignModal = false;
    public $assigningRole;

    public function render()
    {
        return view('livewire.admin.roles',[
            'rows' => $this->user->roles
        ]);
    }

    public function showAssignModal()
    {
        $this->showingAssignModal = true;
    }

    public function assignRole()
    {
        $this->validate([
            'assigningRole' => 'required'
        ]);
        ray("Role Saved");


        $this->user->assignRole($this->assigningRole);

        $this->reset(['assigningRole', 'showingAssignModal']);
    }

    public function onCancel()
    {
        $this->showingAssignModal = false;
    }
}
