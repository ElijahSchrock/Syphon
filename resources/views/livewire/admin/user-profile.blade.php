<form wire:submit.prevent="save" class="space-y-8 divide-y divide-gray-800">

    @csrf

    <div class="space-y-8 divide-y divide-gray-800">
        <div>
            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm font-medium text-white"> Name </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="title" id="title" class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-md rounded-r-md sm:text-sm border-gray-300 bg-gray-800" wire:model="editing.name" placeholder=""/>
                    </div>
                    @error('editing.name')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm font-medium text-white"> Email </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="email" id="email" class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-md rounded-r-md sm:text-sm border-gray-300 bg-gray-800" wire:model="editing.email" placeholder=""/>
                    </div>
                    @error('editing.email')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
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
