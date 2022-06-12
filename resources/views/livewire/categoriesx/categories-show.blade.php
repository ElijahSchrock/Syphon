<x-slot name="header">
    <h2 class="font-semibold text-xl text-white leading-tight">
        {{ $category->name }}
    </h2>
</x-slot>
<div>
    @foreach ($posts as $post)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-syphon-dk-bl text-white">
                    <div class="flex">
                        <div class="mr-4 flex-shrink-0">
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-12 w-12 rounded-full object-cover" src="{{ $post->user->profile_photo_url }}" alt="{{ $post->user->name }}" />
                            </button>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-400"> {{ $post->user->name }}</h4>
                            <h4 class="text-2xl font-bold">{{ $post->title }}</h4>
                            <p class="mt-1 text-sm text-slate-400">{{ $post->categories->name ?? "-" }}</p>
                            <p class="mt-1 text-sm text-red-600">{{ $post->featured_image }}</p>
                            <p class="mt-1">{{ $post->body }}</p>
                            <div class="w-auto pt-2">
                                <x-fas-thumbs-down class="h-6 w-6 mr-2 flex float-right" />
                                <p class="mr-2 flex float-right">{{ $post->dislikes }}</p>
                                <x-fas-thumbs-up class="h-6 w-6 mr-2 flex float-right" />
                                <p class="mr-2 flex float-right">{{ $post->likes }}</p>
                            </div>
                            <div class="mt-6 flex">
                                <div class="mr-4 flex-shrink-0">
                                    <svg class="h-12 w-12 border border-gray-300 bg-white text-gray-300" preserveAspectRatio="none" stroke="currentColor" fill="none" viewBox="0 0 200 200" aria-hidden="true">
                                        <path vector-effect="non-scaling-stroke" stroke-width="1" d="M0 0l200 200M0 200L200 0" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold">Lorem ipsum</h4>
                                    <p class="mt-1">Repudiandae sint consequuntur vel. Amet ut nobis explicabo numquam expedita quia omnis voluptatem. Minus quidem ipsam quia iusto.</p>
                                </div>
                            </div>
                            <div class="mt-6 flex">
                                <div class="mr-4 flex-shrink-0">
                                    <svg class="h-12 w-12 border border-gray-300 bg-white text-gray-300" preserveAspectRatio="none" stroke="currentColor" fill="none" viewBox="0 0 200 200" aria-hidden="true">
                                        <path vector-effect="non-scaling-stroke" stroke-width="1" d="M0 0l200 200M0 200L200 0" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold">Lorem ipsum</h4>
                                    <p class="mt-1">Repudiandae sint consequuntur vel. Amet ut nobis explicabo numquam expedita quia omnis voluptatem. Minus quidem ipsam quia iusto.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


{{-- <a href="{{ route('parts.create') }}">New Category</a> --}}

{{-- <table class="w-full">
    <thead>
        <th class="p-2 text-left">User</th>
        <th class="p-2 text-left">Title</th>
        <th class="p-2 text-left">Excerpt</th>
        <th class="p-2 text-left">Post</th>
    </thead>


    <tr class="my-2">
        <td class="p-2 text-left">{{ $post->user->name }}</td>
<td class="p-2 text-left">{{ $post->title }}</td>
<td class="p-2 text-left">{{ $post->excerpt }}</td>
<td class="p-2 text-left">{{ $post->body }}</td>
</tr>

</table> --}}
