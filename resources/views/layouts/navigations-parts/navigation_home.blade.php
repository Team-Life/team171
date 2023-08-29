<nav x-data="{ open: false }" class="global_nav">
    <div class="navbar navbar-expand-lg bd-navbar sticky-top sm:fixed sm:top-0 sm:right-0 text-right z-10 flex">
        <div  class="navcontents home_nav">
            <h2>Portfolio</h2>
            <span>～Home～</span>
            <div class="pagelinks">
                <a href="{{ route('contact.view') }}" class="contact_form">{{ 'Contact' }}</a>
                <a href="{{ route('WasWorks.view') }}" class="was_works_link">{{'Works supported by WAS'}}</a>
                <a href="#" class="scd_map" class="SCD_map_link" id="SCD_map_link" onclick="event.preventDefault(); showAlert()">{{'SCD map'}}</a>
                <a href="#" class="Administrator" id="secure-link1" onclick="event.preventDefault(); Modalshow1()">{{'Administrator only'}}</a>
            </div>
            <div class="nowtime">
                <?php date_default_timezone_set('Japan');echo '<h3>',date('Y年m月d日 H時i分s秒'),'</h3>';?>
            </div>
        </div>
    </div>
    {{--  パスワード入力用モーダル  --}}
    @include('layouts.password-authentication-modal.password-authentication-modal1')
</nav>
