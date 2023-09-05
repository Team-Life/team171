<x-app-layout>
    <x-slot name="header">
        <div class="conditional-include1">
            @include('layouts.navigations.navigation_contact')
        </div>
        <div class="conditional-include2">
            @include('layouts.navigations.responsive_nav')
        </div>
        <div class="main innerwrap">
            <div>
                <h2 class="ContactRule">お問い合わせの際は、以下をご利用ください</h2>

                {{-- POST通信によるデータベースの保存が成功であれば表示、 --}}
                @if (session('message'))
                    <div class="post_success leading-relaxed">
                        <p>{{ session('message') }}</p>
                        <p>{{ 'リロードすると（「戻る」ボタンの２つ右のぐるりマークを押すと）最初の画面に戻ります。' }}</p>
                    </div>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-13">

                    <div class="Github scale-100  bg-white dark:bg-gray-800 dark:bg-gradient-to-bl
                                    from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex
                                    motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="GithubURL rounded-full">
                            <img src="{{ asset('/images/contact-images/github.png') }}" alt="Githubアイコン">
                            <h2 class="font-semibold text-black-900">

                                <a href="#" onclick="event.preventDefault(); Modalshow3()">
                                    <p>{{ 'Github URL' }}<br>{{ 'メール添付のパスワードを入力してください' }}</p>
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="Email scale-100  bg-white dark:bg-gray-800 dark:bg-gradient-to-bl
                                    from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex
                                    motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="EmailAddress rounded-full">
                            <img src="{{ asset('/images/contact-images/envelop.png') }}" alt="Emailアイコン">
                            <h2 class="font-semibold text-black-900 ">
                                    <p>{{ 'itikawa-sunday.sci@outlook.jp' }}<br>{{ 'GithubのURLを希望される方は'}}<br>{{'まずこちらへ連絡をお願いします' }}</p>
                            </h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </x-slot>

    {{-- 下のrouteメソッドの引数はweb.phpでルート設定したときにnameオプションに入れた任意の値 --}}
    <div class="FormField">
        <form  action="{{ route('ContactForm.store') }}" method="post" enctype="multipart/form-data">
            @csrf   {{-- クロスサイトリクエストフォージェリ攻撃の防御呪文的なやつ --}}

        @include('layouts.basic_form')

        </form>
    </div>
    {{--  パスワード入力用モーダル  --}}
    @include('modals.password-authentication-modal.password-authentication-modal3')

</x-app-layout>
