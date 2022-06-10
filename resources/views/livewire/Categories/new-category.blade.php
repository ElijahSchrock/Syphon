<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-syphon-dk-bl overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-syphon-dk-bl border-b border-syphon-dk-bl text-white">
                    <div class="max-w-lg mx-auto">
                        <div class="mt-10">
                            <h3 class="text-xl font-semibold text-gray-500 uppercase tracking-wide">Craft A Category</h3>
                        </div>
                        <div class="mt-2">
                            <ul role="list" class="mt-2 border-t border-gray-200 divide-y divide-gray-200">
                                <li>
                                    <div>
                                        <div>
                                            <form wire:submit.prevent="save">

                                                @csrf

                                                <div class="">
                                                    <div>
                                                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                                            <div class="sm:col-span-4">
                                                                <label for="title" class="block text-sm font-medium text-white"> Category Name </label>
                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                    <input type="text" name="name" id="name" class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-md rounded-r-md sm:text-sm border-gray-300 bg-gray-800" wire:model="category.name" />
                                                                </div>
                                                                @error('category.name')
                                                                <div class="text-red-600 text-sm">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pt-5">
                                                        <div class="flex justify-end">
                                                            <button wire:click="onCancel" type="button" class="bg-gray-800 py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-white hover:text-black hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                                                            <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-white shadow-sm text-sm font-medium rounded-md text-black bg-anchor-ylw hover:bg-syphon-lt-bl hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create</button>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
