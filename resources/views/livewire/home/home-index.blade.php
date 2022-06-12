<x-slot name="header">
    <h2 class="font-semibold text-xl text-white leading-tight">
        <img class="w-1/2 m-auto" src="{{ asset('syphon_banner_white.png') }}" />
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
                            <p class="mt-1 text-sm text-slate-400">{{ $post->categories->name ?? "No Category Chosen" }}</p>
                            <p class="mt-1 text-sm text-red-600">{{ $post->featured_image }}</p>
                            <p class="mt-1">{{ $post->body }}</p>
                            <div class="w-auto pt-2">
                                <x-fas-thumbs-down class="h-6 w-6 mr-2 flex float-right" />
                                <p class="mr-2 flex float-right">{{ $post->dislikes }}</p>
                                <x-fas-thumbs-up class="h-6 w-6 mr-2 flex float-right" />
                                <p class="mr-2 flex float-right">{{ $post->likes }}</p>
                            </div>
                            <livewire:comment-section :post='$post'/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{ $posts->links() }}
</div>
