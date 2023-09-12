<x-app-layout>
    <x-slot name="header">
        <div class="conditional-include1">
            @include('layouts.navigations.navigation_admin')
        </div>
        <div class="conditional-include2">
            @include('layouts.navigations.responsive_nav')
        </div>

        <h2 class="admin_index font-semibold leading-relaxed">
            Question や Opinion 一覧表示
        </h2>
    </x-slot>

    <div class="mx-auto px-6">
        @foreach($posts_checked as $post){{-- compact等で渡した変数を組み込むときは.blade.phpファイル内では、$をつける --}}
            <div class="mt-4 p-8 bg-white w-full rounded-2xl">
                <h2 class="contact_id_at p-4 font-semibold">
                    <p>{{ $post->id .'番目の投稿です。' }}</p>
                    <p>{{ '～投稿日時：' . $post->created_at .'～'}}</p>
                    {{-- アロー演算子の右のオプションはここではカラム名 --}}
                    <div class="btns">
                        <x-primary-button class="delete_btn" style="font-size:1rem;">
                            delete（削除）
                        </x-primary-button>
                    </div>
                </h2>
                    <hr class="w-full">
                <h2 class="visitorname_email p-4 font-semibold">
                    <p>{{ 'お名前、または御法人名：' . $post->VisitorName }}</p>
                    <p>{{ 'Emailアドレズ：' . $post->VisitorEmail }}</p>
                </h2>
                    <hr class="w-full">
                <p class=""></p>
                <textarea class="question_or_opinion">　{{ $post->QuestionOrOpinion }}</textarea>
            </div>
        @endforeach
    </div>

</x-app-layout>
