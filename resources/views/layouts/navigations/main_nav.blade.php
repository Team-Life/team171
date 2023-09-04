<nav x-data="{ open: false }">
    <div class="homenavbar">
        <div class="homenavcontents" >
            <h2>商品管理システム</h2>
            {{-- 右側のリンクとかチェックボックス --}}
            @if(Auth::check())
            <div class="Itempagelinks">
                <a href="#" >商品一覧</a>
                <a href="{{ route('register_items.view') }}" >商品登録</a>
            </div>
            @endif
            <div class="users_selectbox">
                    <select class="form-select rounded-md" aria-label="Default select example" name = Auth::user()->name id="members_name">
                        <option selected>登録したユーザー</option>
                        @auth
                            <option value="1">A太郎</option>
                            <option value="2">B太郎</option>
                                {{-- @foreach ( $choices as $choice)
                                <option value= {{ $choice->type }}>{{ $choice->category_name }}</option>
                                @endforeach みたいなかんじにする？--}}
                        @endauth
                        {{-- なお、GPT大先生によると、@if(Auth::check())と@authは微妙にちがいがあり、
                            前者は現在、誰かがログインしている状態、後者は、今ログインしていなくても過去に１回でもログインしており
                            データーベースにユーザーの情報が残っている場合を指すらしい--}}
                    </select>
            </div>
            @if(Auth::check())
            <div class="logoutlinks">
                <a href="{{ route('profile.edit') }}" >アカウント編集</a>
                <a href="{{ route('logout') }}" >ログアウト</a>
            </div>
            @endif
        </div>
    </div>
</nav>
                            {{--たぶんここは、あとでBootstrap使うときに、属性を使い回す
                                                            <x-slot name="content">


                                                                    <x-dropdown-link :href="route('profile.edit')">
                                                                    {{ __('Profile') }}
                                                                </x-dropdown-link>

                                                                Authentication
                                                                <form method="POST" action="{{ route('logout') }}">
                                                                    @csrf

                                                                    <x-dropdown-link :href="route('logout')"
                                                                            onclick="event.preventDefault();
                                                                                        this.closest('form').submit();">
                                                                        {{ __('Log Out') }}
                                                                    </x-dropdown-link>
                                                                </form>
                                                            </x-slot>

                                                    </div>

                                                    {{-- Hamburger
                                                    <div class="-mr-2 flex items-center sm:hidden">
                                                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                                            <img src="{{ asset('images/dropbutton.png') }}" alt="ドロップボタン" style="width: 1%;">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            Responsive Navigation Menu
                                            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                                                {{-- <div class="pt-2 pb-3 space-y-1">
                                                    <x-responsive-nav-link href="#" : active="true" >
                                                        もとは:href="route('members')" :active="request()->routeIs('members')"
                                                        登録したユーザー名
                                                    </x-responsive-nav-link>
                                                </div> --}}

                                                {{-- Responsive Settings Options
                                                    たぶん、ここも属性とかは後で使い回す

                                                <div class="pt-4 pb-1 border-t border-gray-200">
                                                    <div class="px-4">
                                                        <div class="font-medium text-base text-gray-800">@if(Auth::check()){{ Auth::user()->name }}@endif</div>
                                                        <div class="font-medium text-sm text-gray-500">@if(Auth::check()){{ Auth::user()->email }}@endif</div>
                                                    </div>

                                                    <div class="mt-3 space-y-1">
                                                        <x-responsive-nav-link :href="route('profile.edit')">
                                                            {{ __('Profile') }}編集
                                                        </x-responsive-nav-link>

                                                        Authentication
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf

                                                            <x-responsive-nav-link :href="route('logout')"
                                                                    onclick="event.preventDefault();
                                                                                this.closest('form').submit();">
                                                                {{ __('Log Out') }}
                                                            </x-responsive-nav-link>
                                                        </form>
                                                    </div>
                                                </div>
                                                --}}

