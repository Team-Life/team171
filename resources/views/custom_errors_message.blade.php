<x-app-layout>
    <x-slot name="header">
        <div class="conditional-include1">
            @include('layouts.navigations.main_nav')
        </div>
        <div class="conditional-include2">
            @include('layouts.navigations.responsive_nav')
        </div>
    </x-slot>
        {{-- ここに入力したものは、resourceのlayoutsフォルダの中のapp.blade.phpの
            {{ slot }}のところに挿入され、「app.blade.php」が表示される--}}

    <div class="index-items-outerwrap">
        <div class="errors_message_area" style="margin-bottom:1rem;">
            <p class="message_statement">
                {{ $message }}
            </p>
        </div>
    </div>
    @include('layouts.footer')
</x-app-layout>
