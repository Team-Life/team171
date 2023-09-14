<x-app-layout>
    <x-slot name="header">
        <div class="conditional-include1">
            <div class="conditional-include1">
                @include('layouts.navigations.main_nav')
            </div>
            <div class="conditional-include2">
                @include('layouts.navigations.responsive_nav')
            </div>
        </div>
        <div class="conditional-include2">
            @include('layouts.navigations.responsive_nav')
        </div>
    </x-slot>

    <div class="innerwrap" style="margin-top:10rem;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="loginOrnotlogin p-6 text-gray-900">
                    @if(Auth::check())
                        <p>ログインしています</p>
                    @else
                        <p>ログインしていません</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</x-app-layout>
