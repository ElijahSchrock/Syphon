<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <h2 class="font-semibold text-xl text-white leading-tight">
                <img class="w-1/2 m-auto" src="{{ asset('syphon_banner_white.png') }}" />
            </h2>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" class="text-white"/>
                <x-jet-input id="email" class="block mt-1 w-full bg-gray-700 text-white" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" class="text-white"/>
                <x-jet-input id="password" class="block mt-1 w-full bg-gray-700 text-white" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center" class="text-white">
                    <x-jet-checkbox id="remember_me" name="remember" class="bg-gray-700"/>
                    <span class="ml-2 text-sm text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-400 hover:text-anchor-ylw" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
