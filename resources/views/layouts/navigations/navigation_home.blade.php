<nav x-data="{ open: false }" class="global_nav">
    <div class="navbar navbar-expand-lg bd-navbar sticky-top sm:fixed sm:top-0 sm:right-0 text-right z-10 flex">
        <div  class="navcontents home_nav">
            <h2>Portfolio ～Home～</h2>
            <div class="pagelinks">
                <a href="{{ route('contact.view') }}" class="contact_form">{{ 'Contact' }}</a>
                <a href="{{ route('WasWorks.view') }}" class="was_works_link">{{'Works supported by WAS'}}</a>
                <a href="#" class="scd_map" class="SCD_map_link" id="SCD_map_link" onclick="event.preventDefault(); showAlert()">{{'SCD map'}}</a>
                <a href="#" class="NoTenki" id="NoTenki" onclick="event.preventDefault(); showAlert()">{{'NoTenki'}}</a>
                <a href="#" class="OragaEC_maker" id="OragaEC_maker" onclick="event.preventDefault(); showAlert()">{{'OragaEC maker'}}</a>
                <a href="#" class="Administrator" id="secure-link1" onclick="event.preventDefault(); Modalshow1()">{{'Administrator only'}}</a>
            </div>
        </div>
    </div>
    {{--  パスワード入力用モーダル  --}}
    @include('modals.password-authentication-modal.password-authentication-modal1')
</nav>
