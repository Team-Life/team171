<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Portfolio by thinking-weed</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        {{-- Googleフォントから --}}
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
        {{-- BootstrapのCSS --}}
        <link href="./../../../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="{{ asset('/css/guest.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('/js/guest.js') }}"></script>
        <script src="{{ asset('/js/home.js') }}"></script>
        <script src="{{ asset('/js/appblade.js') }}"></script>
        <script src="{{ asset('/js/WindowModal_nav.js') }}"></script>
        <script src="{{ asset('/js/modal_adminPage.js') }}"></script>
        <script src="{{ asset('/js/modal_ContactPage.js') }}"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="innerwrap min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div class="form w-full sm:max-w-md mt-6 px-6 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}{{-- login.blade.phpなどのviews/auth/以下の各.blade.phpの外側が
                    <x-guest-layout>～</x-guest-layout>で囲まれているので、ここの
                    slotには、レスポンスに対して、対応する部分の.blade.phpが入りブラウザに表示される--}}
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
