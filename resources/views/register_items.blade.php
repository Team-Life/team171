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

    <div class="register-items-outerwrap">
        <div class="register-items-innerwrap sm:px-6 lg:px-8" style="margin-left: auto; margin-right:5%;margin-bottom:1rem;">

            {{-- POST通信によるデータベースの保存が成功であれば表示、 --}}
            @if (session('message'))
            <div class="post_success leading-relaxed" style="margin: 0 auto;">
                <p>{{ session('message') }}</p>
            </div>
            @endif

            <form class="register_form" action="{{ route('register_items.post') }}" method="post" enctype="multipart/form-data">
                @csrf   {{-- クロスサイトリクエストフォージェリ攻撃の防御呪文的なやつ --}}
                @include('layouts.form_contents')
                {{-- @includeは引数に書いた.blade.phpファイルの内容をそこに挿入する
                    上なら(viewsの)layoutsフォルダの中のform_contents.blade.phpの内容が挿入される
                    イメージとしては「マトリョーシカ」です--}}
            </form>
        </div>
    </div>
    @include('layouts.footer')
</x-app-layout>

