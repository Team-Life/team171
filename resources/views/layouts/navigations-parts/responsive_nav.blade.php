<nav x-data="{ open: false }" class="border-b border-gray-100" >
    <div class="responsive_navbar navbar-expand-lg bd-navbar sticky-top sm:fixed sm:top-0 sm:right-0 text-right z-10 flex">
        {{-- Split dropstart button by Bootstrap--}}
        <div class="btn-group dropstart">
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"
            style="color: black; font-weight:bold; background-color:white ; ">
                <span class="visually-hidden">Toggle Dropstart</span>
            </button>
            <ul class="dropdown-menu" style="padding:0.5rem 1rem 0.5rem 1rem;">
        {{-- Dropdown menu links- --}}
                <li><a href="{{ route('home.view') }}" >{{'Home'}}</a></li>
                <li><a href="{{ route('contact.view') }}" class="contact_form">{{ 'Contact' }}</a></li>
                <li><a href="{{ route('WasWorks.view') }}" class="was_works_link">{{'Works supported by WAS'}}</a></li>
                <li><a href="#" class="scd_map" class="SCD_map_link" id="SCD_map_link" onclick="event.preventDefault(); showAlert()">{{'SCD map'}}</a></li>
                <li><a href="#" class="Administrator" id="secure-link2" onclick="event.preventDefault(); Modalshow2()">{{'Administrator only'}}</a></li>
            </ul>
            <button type="button" class="btn btn-primary" style="color: black; font-weight:bold; background-color:white ;">
                menu
            </button>
        </div>
    </div>
    {{-- パスワード入力用モーダル --}}
    @include('layouts.password-authentication-modal.password-authentication-modal2')
</nav>
