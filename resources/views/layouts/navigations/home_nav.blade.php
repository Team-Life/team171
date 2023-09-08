<div class="homenavbar">
    <div  class="homenavcontents">
        <h2>商品管理システム</h2>
        <div class="pagelinks">
                <a href="{{ route('dashboard') }}" >{{ 'Home menu' }}</a>
                <a href="{{ route('home') }}" >{{ 'Home' }}</a>
                <a href="{{ route('login_screen') }}" >{{ 'Login' }}</a>
                <a href="{{ route('register_screen') }}" >{{ 'Register' }}</a>
        </div>
        <div class="home_users_selectbox">
            <select class="form-select rounded-md" aria-label="Default select example" name = Auth::user()->name id="members_name" >
                @if(Auth::check())
                    <option value = {{ Auth::user()->name }}>{{ Auth::user()->name }}</option>
                @else
                <option selected>登録したユーザー名</option>
                @auth
                @foreach ( $auth_users as $auth_user)
                    <option value= {{ $auth_user -> id }}>{{ $auth_user -> name }}</option>
                @endforeach
                @endauth
                @endif
                {{-- なお、GPT大先生によると、@if(Auth::check())と@authは微妙にちがいがあり、
                    前者は現在、誰かがログインしている状態、後者は、今ログインしていなくても過去に１回でもログインしており
                    データーベースにユーザーの情報が残っている場合を指すらしい--}}
            </select>
        </div>
    </div>
</div>

