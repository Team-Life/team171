<x-guest-layout>
    <x-slot name="header">
        <div class="conditional-include1">
            @include('layouts.navigations.home_nav')
        </div>
        <div class="conditional-include2">
            @include('layouts.navigations.responsive_nav')
        </div>
    </x-slot>
    {{-- Session Status --}}
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="login_form">
        @csrf

        {{-- Email Address --}}
        <div>
            <p class="form_top">Login</p>
            <div class="email_part">
                <p>
                    Email Address
                </p>
                <div class="relative">
                <p>
                    <x-text-input id="email" class="email_input block mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </p>
                <p>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </p>
                </div>
            </div>
        </div>

        {{-- Password --}}
        <div class="password_part">
            <p>
                Password
            </p>
            <p>
                <x-text-input id="password" class="password_input block mt-1"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </p>
        </div>

        {{-- Remember Me --}}
        <div class="remember_me block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="submit_btn_part">
            <x-primary-button class="Login btn">
                Login
            </x-primary-button>

            <div class="forgetpassword">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
</x-guest-layout>
