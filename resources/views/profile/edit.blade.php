<x-app-layout>

    <x-slot name="header">
        <div class="conditional-include1">
            @include('layouts.navigations.main_nav')
        </div>
        <div class="conditional-include2">
            @include('layouts.navigations.responsive_nav')
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl sm:px-6 lg:px-8 space-y-6" style="margin-left: auto; margin-right:5%;margin-bottom:1rem;">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
            @if(Auth::user() && Auth::user()->role > 0)
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
