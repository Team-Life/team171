<nav x-data="{ open: false }" class="border-b border-gray-100">
    <div class="navbar navbar-expand-lg bd-navbar sticky-top sm:fixed sm:top-0 sm:right-0 text-right z-10 flex">
        <div  class="navcontents">
            <h2>Works at WAS</h2>
            <div class="pagelinks">
                    <a href="{{ route('contact.view') }}" >{{ 'Contact' }}</a>
                    <a href="#" class="SCD_map_link" id="SCD_map_link">{{'SCD map'}}</a>
                    <a href="{{ route('home.view') }}" >{{'Home'}}</a>
            </div>
            <div class="nowtime">
                <?php date_default_timezone_set('Japan'); echo '<h3>',date('Y年m月d日 H時i分s秒'),'</h3>';?>
            </div>
        </div>
    </div>
</nav>
