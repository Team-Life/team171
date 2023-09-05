<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigations.main_nav')
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(Auth::check())
                        <p>ログインしています</p>
                    @else
                        <p>ログインしていません</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
