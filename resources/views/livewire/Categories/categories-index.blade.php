<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Categories')}}
        </h2>
    </x-slot>

    <div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-syphon-dk-bl overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-syphon-dk-bl border-b border-syphon-dk-bl text-white">

                        {{-- <a href="{{ route('parts.create') }}">New Category</a> --}}

                        <table class="w-full">
                            <thead>
                                <th class="p-2 text-left">Categories</th>
                            </thead>

                            @foreach ($categories as $category)
                            <tr class="my-2">
                                <td class="p-2 text-left">{{ $category->name }}</td>
                                <td class="p-2 text-left">
                                    <a href=" {{ route('categories.show', ['category' => $category]) }}">View Posts</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

