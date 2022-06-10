<x-slot name="header">
    <h2 class="font-semibold text-xl text-white leading-tight">
        {{ __('Craft A New Post')}}
    </h2>
</x-slot>
<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-syphon-dk-bl overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-syphon-dk-bl border-b border-syphon-dk-bl text-white">
                    <form wire:submit.prevent="save" class="space-y-8 divide-y divide-gray-800">

                        @csrf

                        <div class="space-y-8 divide-y divide-gray-800">
                            <div>
                                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                    <div class="sm:col-span-4">
                                        <label for="title" class="block text-sm font-medium text-white"> Title </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="title" id="title" class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-md rounded-r-md sm:text-sm border-gray-300 bg-gray-800" wire:model="post.title" />
                                        </div>
                                        @error('post.title')
                                        <div class="text-red-600 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="sm:col-span-6">
                                        <label for="body" class="block text-sm font-medium text-white"> Content </label>
                                        <div class="mt-1">
                                            <textarea id="body" name="body" rows="15" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md text-white bg-gray-800" wire:model="post.body"></textarea>
                                        </div>
                                        @error('post.body')
                                            <div class="text-red-600 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="sm:col-span-6">
                                        <label for="category" class="block text-sm font-medium text-white"> Category </label>
                                        <div class="mt-1 flex items-center">
                                            {{-- category logic --}}
                                            <x-select wire:model="post.category" name="category" class="mr-3">
                                                <option value=""></option>
                                                @foreach ($categories as $category )
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                                {{-- <option value="custom" id="custom">New Cateogry?</option> --}}
                                            </x-select>
                                        </div>
                                        @error('post.category')
                                            <div class="text-red-600 text-sm">{{ $message }}</div>
                                        @enderror  
                                    </div>

                                    <div class="sm:col-span-6">
                                        <label for="featured_photo" class="block text-sm font-medium text-white"> Photo </label>
                                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div class="flex text-sm text-gray-600">
                                                    <label for="file-upload" class="relative cursor-pointer bg-syphon-dk-bl rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file" class="sr-only" wire:model="post.featured_photo">
                                                    </label>
                                                    <p class="pl-1 text-gray-500">or drag and drop</p>
                                                </div>
                                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-5">
                                <div class="flex justify-end">
                                    <button wire:click="onCancel" type="button" class="bg-gray-800 py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-white hover:text-black
                                        hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                                    <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-white shadow-sm text-sm font-medium rounded-md text-black bg-anchor-ylw hover:bg-syphon-lt-bl hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Post</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- @foreach ($categories as $category)
<div class="mt-2">
    <ul role="list" class="mt-2 border-t border-gray-200 divide-y divide-gray-200">
        <li class="py-4 flex items-center justify-between space-x-3">
            <div class="min-w-0 flex-1 flex items-center space-x-3">
                <div class="min-w-0 flex-1">
                    <p class="text-lg font-medium text-white truncate">{{ $category->name }}</p>
</div>
</div>
<div class="flex-shrink-0">
    <button type="button" class="group inline-flex items-center py-2 px-3 border border-transparent rounded-full bg-gray-100 hover:bg-syphon-lt-bl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        <a href=" {{ route('categories.show', ['category' => $category]) }}" class="text-sm font-medium text-gray-900 group-hover:text-white"> Browse </a>
    </button>
</div>
</li>
</ul>
</div>
@endforeach --}}
