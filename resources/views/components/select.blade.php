@props([
    'placeholder' => null,
    'trailingAddOn' => null,
    'plain' => false
])

<div class="flex">
  <select {{ $attributes->merge(['class' => 'dark:bg-gray-800  dark:text-white flex-1 input-focus-ring input-focus-border block w-full pl-3 pr-10 py-2 text-base leading-6 border-white dark:border-white focus:outline-none  sm:text-sm sm:leading-5 '. ($plain ? '' : 'rounded-md') . ($trailingAddOn ? ' rounded-r-none' : '')]) }}>
    @if ($placeholder)
        <option disabled value="">{{ $placeholder }}</option>
    @endif

    {{ $slot }}
  </select>

  @if ($trailingAddOn)
    {{ $trailingAddOn }}
  @endif
</div>