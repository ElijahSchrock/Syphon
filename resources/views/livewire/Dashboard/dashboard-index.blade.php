<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @foreach ($posts as $usersPost)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-syphon-dk-bl text-white">

                    {{-- <a href="{{ route('parts.create') }}">New Post</a> --}}
                    <table class="w-full">
                        <thead>
                            <th class="px-2 text-left">Category</th>
                            <th class="px-2 text-left">Title</th>
                            <th class="px-2 text-left">Body</th>
                            <th class="px-2 text-left">Featured Image</th>
                        </thead>

                        <tr class="my-2">
                            <td class="py-2">{{ $usersPost->category }}</td>
                            <td class="py-2">{{ $usersPost->title }}</td>
                            <td class="py-2">{{ $usersPost->body }}</td>
                            <td class="py-2">{{ $usersPost->featured_image }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
    @endforeach

</x-app-layout>
