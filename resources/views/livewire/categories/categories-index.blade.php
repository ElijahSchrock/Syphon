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
                    <div class="max-w-lg mx-auto">
                        <div class="mt-10 flex-1">
                            <div class="mt-2">
                                <ul role="list" class="mt-2 border-gray-200 divide-y divide-gray-200">
                                    <li class="py-4 flex items-center justify-between space-x-3">
                                        <div class="min-w-0 flex-1 flex items-center space-x-3">
                                            <div class="min-w-0 flex-1">
                                                <h3 class="text-xl font-semibold text-gray-500  uppercase truncate">Browse Categories</h3>
                                            </div>
                                        </div>
                                        @hasrole('User')
                                        <div class="flex-shrink-0">
                                            <a class="link" href="{{ route("categories.new") }}">
                                                <button type="button" class="group inline-flex items-center py-2 px-3 border border-transparent rounded-full bg-indigo-600 hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 text-xs">New Category?</button>
                                            </a>
                                        </div>
                                        @endhasrole
                                    </li>
                                </ul>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-500 uppercase tracking-wide flex-1"></h3>
                        </div>
                        @foreach ($categories as $category)
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
                        @endforeach
                        {{ $categories->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
