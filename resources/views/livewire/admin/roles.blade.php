<form wire:submit.prevent="assignRole" class="space-y-8 divide-gray-800">

    @csrf

        <div>
            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm font-medium text-white"> Assign a Role to {{ $user->name }} </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        @if (!$showingAssignModal)
                            <button type="button" class="inline-flex items-center px-5 py-1.5 border border-transparent text-xs font-medium rounded-full shadow-sm text-white bg-gray-800 hover:bg-syphon-lt-bl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" wire:click='showAssignModal'>Roles</button>
                        @endif

                        @if($showingAssignModal)
                            <select type="select" name="role" id="role" class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-md rounded-r-md sm:text-sm border-gray-300 bg-gray-800 ml-3" autofocus wire:model.defer="assigningRole" placeholder="">
                                <option value=""></option>
                                @foreach(\Spatie\Permission\Models\Role::get() as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        @endif
                            {{-- <p>{{$user->name}} Has </p>
                            @foreach ($user->roles as $role )
                               <p> {{$role->name}} </p>
                            @endforeach
                            <p> Role</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5">
            <div class="flex justify-end">
                <button wire:click="onCancel" type="button" class="bg-gray-800 py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-white hover:text-black
                    hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-white shadow-sm text-sm font-medium rounded-md text-black bg-anchor-ylw hover:bg-syphon-lt-bl hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
            </div>
        </div>
</form>
