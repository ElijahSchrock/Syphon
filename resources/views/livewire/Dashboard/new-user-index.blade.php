<div>
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
                            <h4 class="text-2xl font-bold">Create Your First Post!</h4>
                            <p class="mt-1 text-sm text-slate-400">Your Chosen Category will go here</p>
                            <p class="mt-1 text-sm text-red-600">This will be your image link</p>
                            <p class="mt-1">Post content will go here and look just like this. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>