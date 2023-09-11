<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>商品管理システム～ユーザー認証～</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        {{-- Googleフォントから --}}
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
        {{-- BootstrapのCSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <link href="{{ asset('/css/login_screen.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/register_screen.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/template.css') }}" rel="stylesheet">
        <link href="{{ asset('css/navigation.css') }}" rel="stylesheet">
        <link href="{{ asset('css/guest_footer.css') }}" rel="stylesheet">

        {{-- responsive navigation 画面の横幅（1282px）を境にblockなら表示、noneなら非表示--}}
        <style>
            @media (min-width: 1282px) {
                .conditional-include1 {
                    display: block;
                }
                .conditional-include2 {
                    display: none;
                }
            }
            @media (max-width: 1282px) {
                .conditional-include1 {
                    display: none;
                }
                .conditional-include2 {
                    display: block;
                }
            }
        </style>

        {{-- Scripts --}}

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased relative">
        @if (isset($header))
        {{ $header }}
        @endif
        <div class="outerwrap">
            <div class="form_frame">
                {{ $slot }}{{-- login.blade.phpなどのviews/auth/以下の各.blade.phpの外側が
                    <x-guest-layout>～</x-guest-layout>で囲まれているので、ここの
                    slotには、レスポンスに対して、対応する部分の.blade.phpが入りブラウザに表示される--}}
            </div>
        </div>
        @include('layouts.footer')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    </body>
</html>
