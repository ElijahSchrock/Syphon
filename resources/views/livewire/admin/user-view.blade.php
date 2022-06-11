<x-slot name="header">
    <h2 class="font-semibold text-xl text-white leading-tight">
        {{ $user->name }}
    </h2>
</x-slot>

<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-syphon-dk-bl overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-syphon-dk-bl border-b border-syphon-dk-bl text-white">
                    <div class="max-w-lg mx-auto">
                        <div class="mt-10">
                            <h3 class="text-xl font-semibold text-gray-500 uppercase tracking-wide">Edit {{ $user->name }}'s Profile</h3>
                        </div>
                        <div class="mt-2">
                            <livewire:admin.user-profile :editing="$user" />
                            <livewire:admin.current-roles :user="$user" />
                            <livewire:admin.roles :user="$user" >
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>


