<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-syphon-dk-bl overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-syphon-dk-bl border-b border-syphon-dk-bl text-white">
                    <div class="max-w-lg mx-auto">
                        <div class="mt-10">
                            <h3 class="text-xl font-semibold text-gray-500 uppercase tracking-wide">Browse Users</h3>
                        </div>
                        <div class="mt-2">
                            <ul role="list" class="mt-2 border-t border-gray-200 divide-y divide-gray-200">
                                <li class="pt-4 justify-between">
                                    <div class="">
                                        <div class="min-w-0 flex">
                                            <table class="w-full">
                                                <thead class="">
                                                    {{-- <th class="text-left">Id</th> --}}
                                                    <th class="text-left"></th>
                                                    <th class="text-left"></th>
                                                    <th class="text-left"></th>
                                                </thead>
                                                @foreach ($users as $user)
                                                <tr class="my-2">
                                                    <td class="font-semibold">{{ $user->name }}</td>
                                                    <td class="py-2 text-sm">
                                                        <a class="link" href="{{ route("admin.user", ['user' => $user->id]) }}"><x-fas-user-pen class="h-6 w-6" /></a>
                                                    </td>
                                                    <td class="py-2 text-sm">
                                                        <x-fas-user-slash class="h-6 w-6" />
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="pt-3">
                            {{ $users->links() }}
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
