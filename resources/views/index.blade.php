<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigations.main_nav')
    </x-slot>
        {{-- ここに入力したものは、resourceのlayoutsフォルダの中のapp.blade.phpの
            {{ slot }}のところに挿入され、「app.blade.php」が表示される--}}

    <div class="register-items-outerwrap">
        <div class="register-items-innerwrap mx-auto sm:px-6 lg:px-8">
            <form class="register_form" action="{{ route('register_items.post') }}" method="post" enctype="multipart/form-data">
                @csrf   {{-- クロスサイトリクエストフォージェリ攻撃の防御呪文的なやつ --}}
                @include('layouts.form_contents')
                {{-- @includeは引数に書いた.blade.phpファイルの内容をそこに挿入する
                    上なら(viewsの)layoutsフォルダの中のform_contents.blade.phpの内容が挿入される
                    イメージとしては「マトリョーシカ」です--}}
            </form>
        </div>
    </div>
</x-app-layout>

