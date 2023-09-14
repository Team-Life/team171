<nav x-data="{ open: false }" class="border-b border-gray-100" >
    <div class="responsive_navbar navbar-expand-lg bd-navbar sticky-top sm:fixed sm:top-0 sm:right-0 text-right z-10 flex" >
        {{-- Split dropstart button by Bootstrap--}}
        <div class="btn-group dropstart" style="right:-5rem;">
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"
                style="color: black; font-weight:bold; background-color:white ; ">
            </button>
            <ul class="dropdown-menu" style="padding:0.5rem 0 0.5rem 1rem;width:250%;">
            {{-- Dropdown menu links- --}}
                <li><a href="{{ route('home') }}" >{{'Home'}}</a></li>
                <li><a href="{{ route('login_screen') }}" class="login_screen">ログイン画面</a></li>
                <li><a href="{{ route('register_screen') }}" class="register_screen">新規登録画面</a></li>
                <li><a href="{{ route('dashboard') }}" class="home_menu" >{{ 'Home menu' }}</a></li>
                <li><a href="{{ route('index_items.view') }}" class="index_items" >{{ '商品一覧/検索' }}</a></li>
                <li><a href="{{ route('register_items.view') }}" class="register_items.view" >{{ '商品登録（弊社社員専用）' }}</a></li>
                <li>
                    <a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">ログアウト</button>
                    </form>
                    </a>
                </li>
            </ul>
            <button type="button" class="btn btn-primary" style="color: black; font-weight:bold; background-color:white ;">
                menu
            </button>
        </div>
    </div>
</nav>
