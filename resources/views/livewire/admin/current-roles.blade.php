<div>
    <div class="mt-10">
        <h3 class="text-xl font-semibold text-gray-500 uppercase tracking-wide">{{ $user->name }}'s Current Roles</h3>
    </div>
    @foreach ($roles as $role)
    <x-button-link type="button" wire:click="whichPermissions" icon="fas-address-book" class="text-gray-400 text-xs ">&nbsp;{{ $role }}</x-button-link>

    @if($rolesPermissions)
        <livewire:admin.role-perms :role='$role->id' />
    @endif

    @endforeach
</div>
