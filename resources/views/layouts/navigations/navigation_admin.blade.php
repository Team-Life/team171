<nav x-data="{ open: false }" class="border-b border-gray-100">
    <div class="navbar navbar-expand-lg bd-navbar sticky-top sm:fixed sm:top-0 sm:right-0 text-right z-10 flex">
        <div  class="navcontents home_nav">
            <h2 class="admin_title" style="font-size:1.2rem;width:10%;">管理者ページ</h2>
            <div class="pagelinks">
                <a href="{{ route('contact.view') }}" >{{ 'Contact' }}</a>
                <a href="{{ route('WasWorks.view') }}" class="was_works_link" >{{'Works supported by WAS'}}</a>
                <a href="#" class="SCD_map_link" id="SCD_map_link" onclick="event.preventDefault(); showAlert()">{{'SCD map'}}</a>
                <a href="#" class="NoTenki" id="NoTenki" onclick="event.preventDefault(); showAlert()">{{'NoTenki'}}</a>
                <a href="#" class="OragaEC_maker" id="OragaEC_maker" onclick="event.preventDefault(); showAlert()">{{'OragaEC maker'}}</a>
                <a href="{{ route('home.view') }}" >{{'Home'}}</a>
            </div>
        </div>
    </div>
</nav>
