<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePerms extends Component
{
    // public Role $role;

    public function mount(Role $role)
    {
        $this->role = $role;
    }

    public function render()
    {
        $permissions = Permission::findById($this->role->id);
        // $role = Role::find(2);
        $this->permissions = $permissions;
        // $role->permissions;

        return view('livewire.admin.role-perms',[
            'permissions' => $this->permissions
        ]);
    }
}

// {
//     $permissions = [];
//     $oldPermissions = [];

//     if (isset($this->role)) {
//         $permissions = $this->role->permissions->where('new', 1)
//             ->when($this->search, function ($collection) {
//                 return $collection->filter(function ($item) {
//                     return false !== stristr($item->name, $this->search);
//                 });
//             })
//             ->sortBy('name');
//         $oldPermissions = $this->role->permissions->where('new', 0)->sortBy('name');
//     }

//     return view('livewire.setup.role-configure', [
//         'permissions' => $permissions,
//         'oldPermissions' => $oldPermissions
//     ]);
// }
// $role = 'User';
// // Permission::findById($role)
// $role = Role::find(2);

// $role->permissions;