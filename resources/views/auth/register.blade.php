<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <h2 class="font-semibold text-xl text-white leading-tight">
                <img class="w-1/2 m-auto" src="{{ asset('syphon_banner_white.png') }}" />
            </h2>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" class="text-white"/>
                <x-jet-input id="name" class="block mt-1 w-full bg-gray-700 text-white" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" class="text-white"/>
                <x-jet-input id="email" class="block mt-1 w-full bg-gray-700 text-white" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" class="text-white"/>
                <x-jet-input id="password" class="block mt-1 w-full bg-gray-700 text-white" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="text-white"/>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full bg-gray-700 text-white" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-400 hover:text-anchor-ylw" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
