<nav x-data="{ open: false }" class="border-b border-gray-100">
    <div class="navbar navbar-expand-lg bd-navbar sticky-top sm:fixed sm:top-0 sm:right-0 text-right z-10 flex">
        <div  class="navcontents">
            <h2>商品管理システム</h2>
            <div class="pagelinks">
                    <a href="{{ route('login_screen') }}" >{{ 'Login' }}</a>
                    <a href="{{ route('register_screen') }}" >{{ 'Register' }}</a>
            </div>
        </div>
    </div>
</nav>
