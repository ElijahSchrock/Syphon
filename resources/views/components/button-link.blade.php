@props(['icon' => false])
<button
    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'flex items-center space-x-2 text-gray-700 hover:text-indigo-800 dark:text-gray-300 leading-5 font-medium focus:outline-none focus:text-gray-800 focus:underline transition duration-150 ease-in-out' . ($attributes->get('disabled') ? ' opacity-75 cursor-not-allowed' : ''),
    ]) }}
>
    @if($icon)<x-dynamic-component :component="$icon" class="w-4 h-4 fill-current" />@endif

    {{ $slot }}
</button>
