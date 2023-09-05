<x-guest-layout>
    <x-slot name="header">
        @include('layouts.navigations.home_nav')
    </x-slot>
    <form method="POST" action="{{ route('register') }}" class="register_form">
        @csrf

        <div>
            <p class="form_top">Register</p>
            {{-- Name --}}
            <div class="name_part">
                <p>
                    Name
                </p>
                <p>
                    <x-text-input id="name" class="name_input block mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </p>
            </div>
        </div>
        {{-- Email Address --}}
        <div class="email_part">
            <p>
                Email Address
            </p>
            <p>
                <x-text-input id="email" class="email_input block mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </p>
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

        {{-- Confirm Password --}}
        <div class="password_confirmation_part">
            <p>
                Confirm Password
            </p>
            <p>
                <x-text-input id="password_confirmation" class="password_confirmation_input block mt-1"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </p>
        </div>
        <div class="submit_btn_part">
            <x-primary-button class="Register btn">
                {{ 'messages.Register' }}
            </x-primary-button>

            <div class="alreadyregistered">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
