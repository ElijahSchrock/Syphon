<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            <img class="w-1/2 m-auto" src="{{ asset('syphon_banner_white.png') }}"/>
        </h2>
    </x-slot>

    <div>
        @foreach ($posts as $post)
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-syphon-dk-bl text-white">

                            {{-- <a href="{{ route('parts.create') }}">New Post</a> --}}
                            <table class="w-full">
                                <thead>
                                    <th class="px-2 text-left">Id</th>
                                    <th class="px-2 text-left">User</th>
                                    <th class="px-2 text-left">Category</th>
                                    <th class="px-2 text-left">Title</th>
                                    <th class="px-2 text-left">Excerpt</th>
                                    <th class="px-2 text-left">Body</th>
                                    <th class="px-2 text-left">Published</th>
                                    <th class="px-2 text-left">Featured Image</th>
                                </thead>
                            
                                <tr class="my-2">
                                    <td class="py-2">{{ $post->id }}</td>
                                    <td class="py-2">{{ $post->user->name ?? ""}}</td>
                                    <td class="py-2">{{ $post->category ?? "" }}</td>
                                    <td class="py-2">{{ $post->title ?? "" }}</td>
                                    <td class="py-2">{{ $post->excerpt ?? "" }}</td>
                                    <td class="py-2">{{ $post->body ?? "" }}</td>
                                    <td class="py-2">{{ $post->published ?? "" }}</td>
                                    <td class="py-2">{{ $post->featured_image ?? "" }}</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


</x-app-layout>
