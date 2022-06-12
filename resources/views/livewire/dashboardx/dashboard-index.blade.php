<x-slot name="header">
    <h2 class="font-semibold text-xl text-white leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>
@if($hasPosts)
<div>
    @foreach ($posts as $usersPost)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-syphon-dk-bl text-white">
                    <div class="flex">
                        <div class="mr-4 flex-shrink-0">
                            <button wire:click.prevent='toProfile' class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition" {{ route('profile.show') }}>
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        </div>
                        <div>
                            <h4 class="text-2xl font-bold">{{ $usersPost->title }}</h4>
                            <p class="mt-1 text-sm text-slate-400">{{ $usersPost->categories->name ?? "No Category Chosen" }}</p>
                            <p class="mt-1 text-sm text-red-600">{{ $usersPost->featured_image }}</p>
                            <p class="mt-1">{{ $usersPost->body }}</p>
                            <div class="w-auto pt-2">
                                <x-fas-thumbs-down class="h-6 w-6 mr-2 flex float-right" />
                                <p class="mr-2 flex float-right">{{ $usersPost->dislikes }}</p>
                                <x-fas-thumbs-up class="h-6 w-6 mr-2 flex float-right" />
                                <p class="mr-2 flex float-right">{{ $usersPost->likes }}</p>
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
@else
    <livewire:dashboard.new-user-index />
@endif